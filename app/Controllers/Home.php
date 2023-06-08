<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('Beranda');
        echo view('layout/footer');
    }

    public function klinik()
    {
        echo view('layout/header');
        echo view('home/klinik');
        echo view('layout/footer');
    }

    public function treatment()
    {
        echo view('layout/header');
        echo view('home/treatment');
        echo view('layout/footer');
    }

    public function BeforeAfter()
    {
        echo view('layout/header');
        echo view('home/BeforeAfter');
        echo view('layout/footer');
    }

    public function Riwayat()
    {
        echo view('layout/header');
        echo view('home/Riwayat');
        echo view('layout/footer');
    }

    public function Facial()
    {
        echo view('layout/header');
        echo view('Treatment/Facial');
        echo view('layout/footer');
    }

    public function Chemical()
    {
        echo view('layout/header');
        echo view('Treatment/Chemical');
        echo view('layout/footer');
    }

    public function Laser()
    {
        echo view('layout/header');
        echo view('Treatment/Laser');
        echo view('layout/footer');
    }

    public function Glowing()
    {
        echo view('layout/header');
        echo view('Treatment/Glowing');
        echo view('layout/footer');
    }

    public function Badan()
    {
        echo view('layout/header');
        echo view('Treatment/Badan');
        echo view('layout/footer');
    }

    public function Rambut()
    {
        echo view('layout/header');
        echo view('Treatment/Rambut');
        echo view('layout/footer');
    }

    public function Lainnya()
    {
        echo view('layout/header');
        echo view('Treatment/Lainnya');
        echo view('layout/footer');
    }

    public function Login()
    {
        echo view('layout/header');
        echo view('layout/login');
        echo view('layout/footer');
    }

    public function LoginAdmin()
    {
        echo view('layout/header');
        echo view('Admin/Login');
        echo view('layout/footer');
    }

    public function Register()
    {
        echo view('layout/header');
        echo view('layout/register');
        echo view('layout/footer');
    }

    public function ChemicalPeeling()
    {
        echo view('layout/header');
        echo view('Detail/ChemicalPeeling');
        echo view('layout/footer');
    }

    public function DChemicalPeeling()
    {
        echo view('layout/header');
        echo view('Detail/DChemicalPeeling');
        echo view('layout/footer');
    }

    public function CPKetiak()
    {
        echo view('layout/header');
        echo view('Detail/CPKetiak');
        echo view('layout/footer');
    }

    public function CPBibir()
    {
        echo view('layout/header');
        echo view('Detail/CPBibir');
        echo view('layout/footer');
    }

    public function CPLeher()
    {
        echo view('layout/header');
        echo view('Detail/CPLeher');
        echo view('layout/footer');
    }

    public function FacialBasic()
    {
        echo view('layout/header');
        echo view('Detail/FacialBasic');
        echo view('layout/footer');
    }

    public function FacialAntiAcne()
    {
        echo view('layout/header');
        echo view('Detail/FacialAntiAcne');
        echo view('layout/footer');
    }

    public function FacialGold()
    {
        echo view('layout/header');
        echo view('Detail/FacialGold');
        echo view('layout/footer');
    }

    public function FacialOksigen()
    {
        echo view('layout/header');
        echo view('Detail/FacialOksigen');
        echo view('layout/footer');
    }

    public function FacialDetox()
    {
        echo view('layout/header');
        echo view('Detail/FacialDetox');
        echo view('layout/footer');
    }

    public function FacialReguler()
    {
        echo view('layout/header');
        echo view('Detail/FacialReguler');
        echo view('layout/footer');
    }

    public function FacialIntensif()
    {
        echo view('layout/header');
        echo view('Detail/FacialIntensif');
        echo view('layout/footer');
    }

    public function FacialSkin()
    {
        echo view('layout/header');
        echo view('Detail/FacialSkin');
        echo view('layout/footer');
    }

    public function FacialScrubber()
    {
        echo view('layout/header');
        echo view('Detail/FacialScrubber');
        echo view('layout/footer');
    }

    public function FacialIceGlobe()
    {
        echo view('layout/header');
        echo view('Detail/FacialIceGlobe');
        echo view('layout/footer');
    }

    public function LaserBibir()
    {
        echo view('layout/header');
        echo view('Detail/LaserBibir');
        echo view('layout/footer');
    }

    public function LaserBDKetiak()
    {
        echo view('layout/header');
        echo view('Detail/LaserBDKetiak');
        echo view('layout/footer');
    }

    public function LaserWajah()
    {
        echo view('layout/header');
        echo view('Detail/LaserWajah');
        echo view('layout/footer');
    }

    public function GlowingKulitWajah()
    {
        echo view('layout/header');
        echo view('Detail/GlowingKulitWajah');
        echo view('layout/footer');
    }

    public function GlowingKulitKetiak()
    {
        echo view('layout/header');
        echo view('Detail/GlowingKulitKetiak');
        echo view('layout/footer');
    }

    public function GlowingKulitLeher()
    {
        echo view('layout/header');
        echo view('Detail/GlowingKulitLeher');
        echo view('layout/footer');
    }

    public function GlowingKulitBibir()
    {
        echo view('layout/header');
        echo view('Detail/GlowingKulitBibir');
        echo view('layout/footer');
    }

    public function PaketInjeksiVitC()
    {
        echo view('layout/header');
        echo view('Detail/PaketInjeksiVitC');
        echo view('layout/footer');
    }

    public function PaketInjeksiWhitening()
    {
        echo view('layout/header');
        echo view('Detail/PaketInjeksiWhitening');
        echo view('layout/footer');
    }

    public function InjeksiWhitening()
    {
        echo view('layout/header');
        echo view('Detail/InjeksiWhitening');
        echo view('layout/footer');
    }

    public function InjeksiVitC()
    {
        echo view('layout/header');
        echo view('Detail/InjeksiVitC');
        echo view('layout/footer');
    }

    public function HairSPA()
    {
        echo view('layout/header');
        echo view('Detail/HairSPA');
        echo view('layout/footer');
    }

    public function HairMask()
    {
        echo view('layout/header');
        echo view('Detail/HairMask');
        echo view('layout/footer');
    }

    public function HairCreambath()
    {
        echo view('layout/header');
        echo view('Detail/HairCreambath');
        echo view('layout/footer');
    }

    public function CuciVitRambut()
    {
        echo view('layout/header');
        echo view('Detail/CuciVitRambut');
        echo view('layout/footer');
    }

    public function RFacialBasic()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialBasic');
        echo view('layout/footer');
    }

    public function RFacialAcne()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialAcne');
        echo view('layout/footer');
    }

    public function RFacialDetox()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialDetox');
        echo view('layout/footer');
    }

    public function RFacialGold()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialGold');
        echo view('layout/footer');
    }

    public function RFacialReguler()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialReguler');
        echo view('layout/footer');
    }

    public function RFacialOksigen()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialOksigen');
        echo view('layout/footer');
    }

    public function RFacialIntensif()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialIntensif');
        echo view('layout/footer');
    }

    public function RFacialIceGlobe()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialIceGlobe');
        echo view('layout/footer');
    }

    public function RFacialSkin()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialSkin');
        echo view('layout/footer');
    }

    public function RFacialScrubber()
    {
        echo view('layout/header');
        echo view('Reservasi/RFacialScrubber');
        echo view('layout/footer');
    }

    public function RChemicalPeeling()
    {
        echo view('layout/header');
        echo view('Reservasi/RChemicalPeeling');
        echo view('layout/footer');
    }

    public function RDChemicalPeeling()
    {
        echo view('layout/header');
        echo view('Reservasi/RDChemicalPeeling');
        echo view('layout/footer');
    }

    public function RCPKetiak()
    {
        echo view('layout/header');
        echo view('Reservasi/RCPKetiak');
        echo view('layout/footer');
    }

    public function RCPLeher()
    {
        echo view('layout/header');
        echo view('Reservasi/RCPLeher');
        echo view('layout/footer');
    }

    public function RCPBibir()
    {
        echo view('layout/header');
        echo view('Reservasi/RCPBibir');
        echo view('layout/footer');
    }

    public function Home()
    {
        echo view('Admin/Home');
    }

    public function Dasboard()
    {
        echo view('Admin/Dasboard');
    }

    public function Laporan()
    {
        echo view('Admin/Laporan');
    }

    public function DAdmin()
    {
        echo view('Admin/DAdmin');
    }
}
