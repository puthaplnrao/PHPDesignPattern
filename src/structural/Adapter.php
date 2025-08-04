<?php
class OldPrinter
{
    public function printOld()
    {
        echo "Old printing...\n";
    }
}

class NewPrinter
{
    public function print()
    {
        echo "New printing...\n";
    }
}

class PrinterAdapter extends NewPrinter
{
    private $oldPrinter;
    public function __construct(OldPrinter $oldPrinter)
    {
        $this->oldPrinter = $oldPrinter;
    }
    public function print()
    {
        $this->oldPrinter->printOld();
    }
}

$printer = new PrinterAdapter(new OldPrinter());
$printer->print(); // Adapts old to new