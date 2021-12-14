<?php

namespace App\Controllers;

use \Dompdf\Dompdf;

class Pelanggan extends BaseController
{
    public function index()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $pelanggan[] = [
                'nama' => $faker->name(),
                'no_telp' => $faker->phoneNumber(),
                'alamat' => $faker->address(),
                'email' => $faker->email()
            ];
        }
        $data['pelanggan'] = $pelanggan;
        return view('dashboard/pelanggan', $data);
    }
    public function printpdf()
    {
        $dompdf = new Dompdf();
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $pelanggan[] = [
                'nama' => $faker->name(),
                'no_telp' => $faker->phoneNumber(),
                'alamat' => $faker->address(),
                'email' => $faker->email()
            ];
        }
        $data['pelanggan'] = $pelanggan;
        $html = view('dashboard/pelanggan', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        //$dompdf->stream(); //downliad
        $dompdf->stream('data pelanggan.pdf', array(
            "Attachment" => false
        ));
    }
}
