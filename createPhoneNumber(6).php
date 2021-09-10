<?php

function createPhoneNumber(array $digits): string {
  return sprintf("(%d%d%d) %d%d%d-%d%d%d%d", ...$digits);
}
