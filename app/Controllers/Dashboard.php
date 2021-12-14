<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('dashboard/index', $data);
    }

    public function pdf()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            $pelanggan[] = [
                'nama' => $faker->name(),
                'no_telp' => $faker->phoneNumber(),
                'alamat' => $faker->address(),
                'email' => $faker->email()
            ];
        }
        $data['pelanggan'] = $pelanggan;
        return view('dashboard/pdf', $data);
    }
    public function printpdf()
    {
        $dompdf = new Dompdf();
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
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
    public function chart()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('product');

        $query = $builder->select("COUNT(id) as count, sell as s, DAYNAME(created_at) as day");
        $query = $builder->where("DAY(created_at) GROUP BY DAYNAME(created_at), s")->get();
        $record = $query->getResult();

        $products = [];

        foreach ($record as $row) {
            $products[] = array(
                'day'   => $row->day,
                'sell' => floatval($row->s)
            );
        }

        $data['products'] = ($products);
        return view('dashboard/chart', $data);
    }

    public function ajax()
    {
        $data = [
            'title' => 'Ajax'
        ];
        return view('dashboard/ajax', $data);
    }
}
