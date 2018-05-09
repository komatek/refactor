<?php

namespace Magento;

class FormatterJSON implements Formatter
{
  public function format($message)
  {
      return json_encode($message);
  }
}
