<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public static function specific(): array
    {
        return [
            [
                'role' => 'Inti',
                'isPimpinan' => true,
                'specifiedRole' => 'Ketua',
                'username' => 'Wulan Kusuma',
                'name' => 'Ni Putu Wulan Kusuma Dewi',
                'email' => 'dewi.2208511021@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739241866-wulan@2x.png',
            ],
            [
                'role' => 'Inti',
                'isPimpinan' => true,
                'specifiedRole' => 'Wakil Ketua 1',
                'username' => 'Nanda Nirmala',
                'name' => 'Ni Wayan Nanda Nirmala Sari',
                'email' => 'sari.2208551079@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739241999-nanda@2x.png',
            ],
            [
                'role' => 'Inti',
                'isPimpinan' => true,
                'specifiedRole' => 'Wakil Ketua 2',
                'username' => 'Aryadana Baraja',
                'name' => 'I Made Gede Aryadana Baraja Putra',
                'email' => 'putra.2308561070@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242129-baraja@2x.png',
            ],
            [
                'role' => 'Inti',
                'isPimpinan' => true,
                'specifiedRole' => 'Sekretaris 1',
                'username' => 'Andini Maharani',
                'name' => 'Made Andini Maharani',
                'email' => 'maharani.2308541043@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242166-andini@2x.png',
            ],
            [
                'role' => 'Inti',
                'isPimpinan' => true,
                'specifiedRole' => 'Sekretaris 2',
                'username' => 'Mutiara Aulia',
                'name' => 'Mutiara Aulia Haerani',
                'email' => 'haerani.2308531009@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242194-ara@2x.png',
            ],
            [
                'role' => 'Inti',
                'isPimpinan' => true,
                'specifiedRole' => 'Bendahara 1',
                'username' => 'Nur Rifatul',
                'name' => 'Nur Rifatul Ifadah',
                'email' => 'ifadah.2308511034@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242217-riris@2x.png',
            ],
            [
                'role' => 'Inti',
                'isPimpinan' => true,
                'specifiedRole' => 'Bendahara 2',
                'username' => 'Wahyuni Kencana',
                'name' => 'Ni Putu Wahyuni Kencana Dewi',
                'email' => 'dewi.2308531013@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242247-opink@2x.png',
            ],
            [
                'role' => 'Komisi 1',
                'isPimpinan' => true,
                'specifiedRole' => 'Kepala Komisi 1',
                'username' => 'Leviana Azzachro',
                'name' => 'Leviana Azzachro',
                'email' => 'azzachro.2308511027@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242268-levi@2x.png',
            ],
            [
                'role' => 'Komisi 2',
                'isPimpinan' => true,
                'specifiedRole' => 'Kepala Komisi 2',
                'username' => 'Shaila Rani',
                'name' => 'Shaila Rani Singkem',
                'email' => 'singkem.2308531007@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242287-aila@2x.png',
            ],
            [
                'role' => 'Komisi 3',
                'isPimpinan' => true,
                'specifiedRole' => 'Kepala Komisi 3',
                'username' => 'Rama Yasa',
                'name' => 'I Gede Rama Yasa Mahendra',
                'email' => 'mahendra.2308561016@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242306-rama@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'isPimpinan' => true,
                'specifiedRole' => 'Kepala Komisi 4',
                'username' => 'Dyah Regita',
                'name' => 'Kadek Dyah Regita Wulandari Wijaya',
                'email' => 'wijaya.2208551080@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242328-regita@2x.png',
            ],
            [
                'role' => 'Komisi 5',
                'isPimpinan' => true,
                'specifiedRole' => 'Kepala Komisi 5',
                'username' => 'William Saputra',
                'name' => 'William Saputra',
                'email' => 'saputra.2308561010@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242350-Willy.jpg',
            ],
            [
                'role' => 'Komisi 1',
                'isPimpinan' => true,
                'specifiedRole' => 'Wakil Kepala Komisi 1',
                'username' => 'Ayu Adhelia',
                'name' => 'I Gusti Ayu Adhelia Mona Prayumita',
                'email' => 'prayumita.2408551063@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242404-adhel@2x.png',
            ],
            [
                'role' => 'Komisi 2',
                'isPimpinan' => true,
                'specifiedRole' => 'Wakil Kepala Komisi 2',
                'username' => 'Liyang Anugrah',
                'name' => 'I Gede Liyang Anugrah Oktapian',
                'email' => 'oktapian.2308561042@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242427-liyang@2x.png',
            ],
            [
                'role' => 'Komisi 3',
                'isPimpinan' => true,
                'specifiedRole' => 'Wakil Kepala Komisi 3',
                'username' => 'Kenny Bayu',
                'name' => 'I Putu Kenny Bayu Adi Putra',
                'email' => 'putra.2408521029@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242792-kenny@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'isPimpinan' => true,
                'specifiedRole' => 'Wakil Kepala Komisi 4',
                'username' => 'Anandia Radharani',
                'name' => 'Ni Kadek Anandia Radharani',
                'email' => 'radharani.2408531020@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242817-anandia@2x.png',
            ],
            [
                'role' => 'Komisi 5',
                'isPimpinan' => true,
                'specifiedRole' => 'Wakil Kepala Komisi 5',
                'username' => 'Riky Hidayat',
                'name' => 'Mochammad Riky Hidayat',
                'email' => 'hidayat.2408561090@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242840-riky@2x.png',
            ],
            [
                'role' => 'Komisi 1',
                'specifiedRole' => 'Anggota Komisi 1',
                'username' => 'Putu Ayu',
                'name' => 'Ni Putu Ayu Diah Wulandari',
                'email' => 'wulandari.2408541077@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242894-tuayu@2x.png',
            ],
            [
                'role' => 'Komisi 1',
                'specifiedRole' => 'Anggota Komisi 1',
                'username' => 'Almira Nathania',
                'name' => 'Almira Nathania',
                'email' => 'nathania.2308511015@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242914-almira@2x.png',
            ],
            [
                'role' => 'Komisi 1',
                'specifiedRole' => 'Anggota Komisi 1',
                'username' => 'Widhi Widanty',
                'name' => 'Ni Ketut Widhi Widanty Tirthaningsih',
                'email' => 'tirthaningsih.2308511022@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242938-widhi@2x.png',
            ],
            [
                'role' => 'Komisi 1',
                'specifiedRole' => 'Anggota Komisi 1',
                'username' => 'Agung Jayanatha',
                'name' => 'Anak Agung Made Jayanatha Suputra',
                'email' => 'suputra.2408541043@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242966-gungjaya@2x.png',
            ],
            [
                'role' => 'Komisi 2',
                'specifiedRole' => 'Anggota Komisi 2',
                'username' => 'Syifa Desafriani',
                'name' => 'Syifa Desafriani',
                'email' => 'desafriani.2308511021@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739242987-syifa@2x.png',
            ],
            [
                'role' => 'Komisi 2',
                'specifiedRole' => 'Anggota Komisi 2',
                'username' => 'Alyaa Salwaa',
                'name' => 'Alyaa Salwaa Hutagalung',
                'email' => 'hutagalung.2308531014@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243008-alya@2x.png',
            ],
            [
                'role' => 'Komisi 2',
                'specifiedRole' => 'Anggota Komisi 2',
                'username' => 'Thobias Luwu',
                'name' => 'Thobias Luwu',
                'email' => 'luwu.2408541024@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243035-thoby@2x.png',
            ],
            [
                'role' => 'Komisi 2',
                'specifiedRole' => 'Anggota Komisi 2',
                'username' => 'Teja Wistara',
                'name' => 'I Putu Rakha Teja Wistara',
                'email' => 'wistara.2308551042@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243080-teja@2x.png',
            ],
            [
                'role' => 'Komisi 2',
                'specifiedRole' => 'Anggota Komisi 2',
                'username' => 'Eka Pebriyanti',
                'name' => 'Ni Luh Eka Pebriyanti',
                'email' => 'pebriyanti.2308531008@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243104-eka@2x.png',
            ],
            [
                'role' => 'Komisi 3',
                'specifiedRole' => 'Anggota Komisi 3',
                'username' => 'Sandya Wira',
                'name' => 'I Kadek Sandya Wira Jaya',
                'email' => 'jaya.2408531010@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243127-sandya@2x.png',
            ],
            [
                'role' => 'Komisi 3',
                'specifiedRole' => 'Anggota Komisi 3',
                'username' => 'Cindy Rodenni',
                'name' => 'Cindy Rodenni Siringoringo',
                'email' => 'siringoringo.2408561149@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243148-cindy@2x.png',
            ],
            [
                'role' => 'Komisi 3',
                'specifiedRole' => 'Anggota Komisi 3',
                'username' => 'Ayu Mas',
                'name' => 'Putu Ayu Mas Ariesty Paramasuari',
                'email' => 'paramasuari.2408541022@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243174-gekmas@2x.png',
            ],
            [
                'role' => 'Komisi 3',
                'specifiedRole' => 'Anggota Komisi 3',
                'username' => 'Sinar Christien',
                'name' => 'Sinar Christien Sitorus',
                'email' => 'sitorus.2208521050@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243205-christien@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'specifiedRole' => 'Anggota Komisi 4',
                'username' => 'Ayu Eriyani',
                'name' => 'I Gusti Ayu Komang Eriyani Maheswari',
                'email' => 'maheswari.2408531033@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243228-eriyani@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'specifiedRole' => 'Anggota Komisi 4',
                'username' => 'Satria Wibawa',
                'name' => 'I Gusti Ngurah Agus Satria Wibawa',
                'email' => 'wibawa.2408561009@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243271-satria@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'specifiedRole' => 'Anggota Komisi 4',
                'username' => 'Nari Panditani',
                'name' => 'Ni Made Nari Panditani',
                'email' => 'panditani.2308511048@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243294-nari@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'specifiedRole' => 'Anggota Komisi 4',
                'username' => 'Ratna Iren',
                'name' => 'Ratna Iren Br Tamba',
                'email' => 'tamba.2308511031@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243322-iren@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'specifiedRole' => 'Anggota Komisi 4',
                'username' => 'Kirani Prasanti',
                'name' => 'Putu Kirani Prasanti Dewi',
                'email' => 'dewi.2408551053@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243346-kirani@2x.png',
            ],
            [
                'role' => 'Komisi 4',
                'specifiedRole' => 'Anggota Komisi 4',
                'username' => 'Katarina Wahyuni',
                'name' => 'Katarina Wahyuni Lembu Nay',
                'email' => 'nay.2408541034@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243394-katarina@2x.png',
            ],
            [
                'role' => 'Komisi 5',
                'specifiedRole' => 'Anggota Komisi 5',
                'username' => 'Arya Kesha',
                'name' => 'I Gede Arya Kesha Narendra Subirman',
                'email' => 'subirman.2408561048@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243419-Kesha@2x.png',
            ],
            [
                'role' => 'Komisi 5',
                'specifiedRole' => 'Anggota Komisi 5',
                'username' => 'Putu Revalina',
                'name' => 'Ni Putu Revalina Suryani Dewi',
                'email' => 'dewi.2408551035@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243477-reva@2x.png',
            ],
            [
                'role' => 'Komisi 5',
                'specifiedRole' => 'Anggota Komisi 5',
                'username' => 'Dwi Anjani',
                'name' => 'Dewa Ayu Dwi Anjani',
                'email' => 'anjani.2408521004@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243507-anjani@2x.png',
            ],
            [
                'role' => 'Komisi 5',
                'specifiedRole' => 'Anggota Komisi 5',
                'username' => 'Arya Kusuma',
                'name' => 'I Komang Arya Kusuma',
                'email' => 'kusuma.2408551041@student.unud.ac.id',
                'password' => Hash::make('dpmfmipa2025'),
                'photo' => 'profile-photos/1739243533-Arya@2x.png',
            ],
            [
                'role' => 'Admin',
                'isPimpinan' => true,
                'specifiedRole' => 'Admin',
                'username' => 'Admin DPM',
                'name' => 'Super Admin DPM FMIPA',
                'email' => 'dpmfmipaunud2025@gmail.com',
                'password' => Hash::make('passwordadmin'),
                'photo' => 'profile-photos/1737815231-Blank-Profile.jpg',
            ],
        ];
    }
}
