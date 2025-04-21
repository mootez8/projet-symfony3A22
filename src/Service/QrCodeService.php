<?php

namespace App\Service;

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

class QrCodeService
{
    private string $qrDirectory;

    public function __construct(string $projectDir)
    {
        $this->qrDirectory = $projectDir . '/public/QR';
        if (!is_dir($this->qrDirectory)) {
            mkdir($this->qrDirectory, 0777, true);
        }
    }

    public function generateAndSave(string $data, string $filename): string
    {
        $options = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_PNG,
            'eccLevel' => QRCode::ECC_L,
            'scale' => 5,
        ]);

        $qrcode = new QRCode($options);
        $filePath = $this->qrDirectory . '/' . $filename;

        $qrcode->render($data, $filePath);

        return '/QR/' . $filename; // relative URL for Twig
    }
}
