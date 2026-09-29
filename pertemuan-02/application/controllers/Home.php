<?php
class Home extends Controller
{
    public function index(): void
    {
        $data = [
            'judul' => 'Fondasi MVC DPWL',
            'pesan' => 'Request telah melewati front controller, Router, Controller, dan View.'
        ];
        $this->view('home/index', $data);
    }

    public function info(string $topik = 'mvc'): void
    {
        $this->view('home/info', ['topik' => $topik]);
    }

    public function pasien(string $nik = '1901071010060001'): void
    {
        $data = [
            'title' => 'Detail Pasien',
            'nik'   => $nik,
            'nama'  => 'Andika Setiawan',
        ];
        $this->view('home/pasien', $data);
    }
}