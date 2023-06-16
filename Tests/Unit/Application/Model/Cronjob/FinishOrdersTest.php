<?php

namespace Mollie\Payment\Tests\Unit\Application\Model\Cronjob;

use Mollie\Payment\Application\Model\Cronjob\FinishOrders;
use Mollie\Payment\Tests\Unit\ConfigUnitTestCase;
use OxidEsales\Eshop\Application\Model\Order;
use OxidEsales\Eshop\Core\Config;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\UtilsObject;
use OxidEsales\TestingLibrary\UnitTestCase;
use Mollie\Payment\Application\Helper\Payment;

class FinishOrdersTest extends ConfigUnitTestCase
{
    public function tearDown(): void
    {
        \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute('DELETE FROM oxorder WHERE oxid = "finishOrdersTest"');

        parent::tearDown();
    }

    public function testStartCronjob()
    {
        $oOrder = $this->getMockBuilder(Order::class)->disableOriginalConstructor()->getMock();
        $oOrder->method('getId')->willReturn('TestID');
        $oOrder->method('load')->willReturn(true);
        $oOrder->method('mollieIsOrderInUnfinishedState')->willReturn(true);

        UtilsObject::setClassInstance(Order::class, $oOrder);

        $sFolder = 'MollieProcessingStatus';

        $oConfig = $this->getMockBuilder(Config::class)->disableOriginalConstructor()->getMock();
        $oConfig->method('getShopConfVar')->willReturn($sFolder);

        Registry::set(Config::class, $oConfig);

        \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute("INSERT INTO oxorder (OXID, OXSHOPID, OXSTORNO, OXPAYMENTTYPE, OXORDERDATE, OXTRANSSTATUS, OXFOLDER, OXPAID) VALUE ('finishOrdersTest', 2, 0, 'molliecreditcard', ?, 'NOT_FINISHED', ?, ?)", array(date('Y-m-d H:i:s'), $sFolder, date('Y-m-d H:i:s', time() - (60 * 10))));

        $oCronjob = new FinishOrders(2);
        $result = $oCronjob->startCronjob();

        $this->assertTrue($result);
    }

    public function testStartCronjobException()
    {
        $oOrder = $this->getMockBuilder(Order::class)->disableOriginalConstructor()->getMock();
        $oOrder->method('getId')->willReturn('TestID');
        $oOrder->method('load')->willReturn(true);
        $oOrder->method('mollieIsOrderInUnfinishedState')->willReturn(true);
        $oOrder->method('mollieFinishOrder')->willThrowException(new \Exception('Test-Exception'));

        UtilsObject::setClassInstance(Order::class, $oOrder);

        $sFolder = 'MollieProcessingStatus';

        $this->initModuleSettingMock($sFolder);

        \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute("INSERT INTO oxorder (OXID, OXSTORNO, OXPAYMENTTYPE, OXORDERDATE, OXTRANSSTATUS, OXFOLDER, OXPAID) VALUE ('finishOrdersTest', 0, 'molliecreditcard', ?, 'NOT_FINISHED', ?, ?)", array(date('Y-m-d H:i:s'), $sFolder, date('Y-m-d H:i:s', time() - (60 * 10))));

        $oCronjob = new FinishOrders();
        $result = $oCronjob->startCronjob();

        Payment::destroyInstance();

        $this->assertFalse($result);
    }
}
