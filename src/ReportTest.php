<?php

namespace Magento\Test;

use Magento\Report;

class ReportTest extends \PHPUnit_Framework_TestCase
{
    public function testSendReportInHtmlFormat()
    {
        $report = new Report();
        $mailer = new Mailer();
        $formatter = new FormatterHTML();

        $report->writeTitle('');
        $report->updateWithCurrentOrGivenDate();
        $report->writeContent('This is the content');

        var $reportInformation = $report->getReportInformation();
        var $reportInformationFormatted = $formatter->format($reportInformation);
        var $sentStatus = $mailer->send($reportInformationFormatted);

        $this->assertTrue($sentStatus);
    }

    public function testSendReportInJsonFormat()
    {
        $report = new Report();
        $mailer = new Mailer();
        $formatter = new FormatterJSON();

        $report->setTitle('');
        $report->setDate();
        $report->setContent('This is the content');

        var $reportInformation = $report->getReportInformation();
        var $reportInformationFormatted = $formatter->format($reportInformation);
        var $sentStatus = $mailer->send($reportInformationFormatted);

        $this->assertTrue($sentStatus);
    }
}
