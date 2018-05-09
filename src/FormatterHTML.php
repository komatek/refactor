<?php

namespace Magento;

class FormatterHTML implements Formatter
{
  public function format($message)
  {
      return "
          <h1>{$message["title"]}</h1> .
          <p>{$message["date"]}</p> .
          <div class='content'>{$message["content"]}</div> .
      ";
  }
}
