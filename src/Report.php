<?php

namespace Magento;

class Report
{
    private $title;
    private $date;
    private $content;

    public __construct(){
      $this->title = '';
      $this->date = updateWithCurrentOrGivenDate();
      $this->content = '';
    }

    public function writeTitle($title)
    {
        $this->title = $title;
    }

    public function updateWithCurrentOrGivenDate($date = null)
    {
        if (!$date) {
            $this->date = (new \DateTime())->format('y-m-d h:i:s');
        } else {
            $this->date = $date;
        }
    }

    public function writeContent($content)
    {
        $this->content = $content;
    }

    public function isFilled()
    {
        if (isTitleEmpty()) {
            return false;
        }

        if (isContentEmpty()) {
            return false;
        }

        return true;
    }

    private function isTitleEmpty(){
      return empty($this->title);
    }

    private function isContentEmpty(){
      return empty($this->content);
    }

    public function getReportInformation()
    {
        return [
            'title' => $this->title,
            'date' => $this->date,
            'content' => $this->content
        ];
    }
}
