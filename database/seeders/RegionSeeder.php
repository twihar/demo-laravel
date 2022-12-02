<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{


    public function run()
    {
        DB::table('regions')->insert([
            [
                'id' => 1,
                'name' => 'Adrar',
                'city_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Tamest',
                'city_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Charouine',
                'city_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Reggane',
                'city_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'In Zghmir',
                'city_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Tit',
                'city_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Ksar Kaddour',
                'city_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Tsabit',
                'city_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Timimoun',
                'city_id' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Ouled Saïd',
                'city_id' => 1,
            ],
            [
                'id' => 11,
                'name' => 'Zaouiet Kounta',
                'city_id' => 1,
            ],
            [
                'id' => 12,
                'name' => 'Aoulef',
                'city_id' => 1,
            ],
            [
                "id" => 13,
                "name" => "Tamekten",
                "city_id" => 1,
            ],
            [
                "id" => 14,
                "name" => "Tamantit",
                "city_id" => 1,
            ],
            [
                "id" => 15,
                "name" => "Fenoughil",
                "city_id" => 1,
            ],
            [
                "id" => 16,
                "name" => "Tinerkouk",
                "city_id" => 1,
            ],
            [
                "id" => 17,
                "name" => "Deldoul",
                "city_id" => 1,
            ],
            [
                "id" => 18,
                "name" => "Sali",
                "city_id" => 1,
            ],
            [
                "id" => 19,
                "name" => "Akabli",
                "city_id" => 1,
            ],
            [
                "id" => 20,
                "name" => "Metarfa",
                "city_id" => 1,
            ],
            [
                "id" => 21,
                "name" => "Ouled Ahmed Tammi",
                "city_id" => 1,
            ],
            [
                "id" => 22,
                "name" => "Bouda",
                "city_id" => 1,
            ],
            [
                "id" => 23,
                "name" => "Aougrout",
                "city_id" => 1,
            ],
            [
                "id" => 24,
                "name" => "Talmine",
                "city_id" => 1,
            ],
            [
                "id" => 25,
                "name" => "Bordj Badji Mokhtar",
                "city_id" => 1,
            ],
            [
                "id" => 26,
                "name" => "Sebaa",
                "city_id" => 1,
            ],
            [
                "id" => 27,
                "name" => "Ouled Aïssa",
                "city_id" => 1,
            ],
            [
                "id" => 28,
                "name" => "Timiaouine",
                "city_id" => 1,
            ],
            [
                "id" => 29,
                "name" => "Chlef",
                "city_id" => 2,
            ],
            [
                "id" => 30,
                "name" => "Ténès",
                "city_id" => 2,
            ],
            [
                "id" => 31,
                "name" => "Bânairia",
                "city_id" => 2,
            ],
            [
                "id" => 32,
                "name" => "El Karimia",
                "city_id" => 2,
            ],
            [
                "id" => 33,
                "name" => "Tadjena",
                "city_id" => 2,
            ],
            [
                "id" => 34,
                "name" => "Taougrite",
                "city_id" => 2,
            ],
            [
                "id" => 35,
                "name" => "Beni Haoua",
                "city_id" => 2,
            ],
            [
                "id" => 36,
                "name" => "Sobha",
                "city_id" => 2,
            ],
            [
                "id" => 37,
                "name" => "Harchoun",
                "city_id" => 2,
            ],
            [
                "id" => 38,
                "name" => "Ouled Fares",
                "city_id" => 2,
            ],
            [
                "id" => 39,
                "name" => "Sidi Akkacha",
                "city_id" => 2,
            ],
            [
                "id" => 40,
                "name" => "Boukadir",
                "city_id" => 2,
            ],
            [
                "id" => 41,
                "name" => "Beni Rached",
                "city_id" => 2,
            ],
            [
                "id" => 42,
                "name" => "Talassa",
                "city_id" => 2,
            ],
            [
                "id" => 43,
                "name" => "Harenfa",
                "city_id" => 2,
            ],
            [
                "id" => 44,
                "name" => "Oued Goussine",
                "city_id" => 2,
            ],
            [
                "id" => 45,
                "name" => "Dahra",
                "city_id" => 2,
            ],
            [
                "id" => 46,
                "name" => "Ouled Abbes",
                "city_id" => 2,
            ],
            [
                "id" => 47,
                "name" => "Sendjas",
                "city_id" => 2,
            ],
            [
                "id" => 48,
                "name" => "Zeboudja",
                "city_id" => 2,
            ],
            [
                "id" => 49,
                "name" => "Oued Sly",
                "city_id" => 2,
            ],
            [
                "id" => 50,
                "name" => "Abou El Hassan",
                "city_id" => 2,
            ],
            [
                "id" => 51,
                "name" => "El Marsa",
                "city_id" => 2,
            ],
            [
                "id" => 52,
                "name" => "Chettia",
                "city_id" => 2,
            ],
            [
                "id" => 53,
                "name" => "Sidi Abderrahmane",
                "city_id" => 2,
            ],
            [
                "id" => 54,
                "name" => "Moussadek",
                "city_id" => 2,
            ],
            [
                "id" => 55,
                "name" => "El Hadjadj",
                "city_id" => 2,
            ],
            [
                "id" => 56,
                "name" => "Labiod Medjadja",
                "city_id" => 2,
            ],
            [
                "id" => 57,
                "name" => "Oued Fodda",
                "city_id" => 2,
            ],
            [
                "id" => 58,
                "name" => "Ouled Ben Abdelkader",
                "city_id" => 2,
            ],
            [
                "id" => 59,
                "name" => "Bouzeghaia",
                "city_id" => 2,
            ],
            [
                "id" => 60,
                "name" => "Aïn Merane",
                "city_id" => 2,
            ],
            [
                "id" => 61,
                "name" => "Oum Drou",
                "city_id" => 2,
            ],
            [
                "id" => 62,
                "name" => "Breira",
                "city_id" => 2,
            ],
            [
                "id" => 63,
                "name" => "Beni Bouateb",
                "city_id" => 2,
            ],
            [
                "id" => 64,
                "name" => "Laghouat",
                "city_id" => 3,
            ],
            [
                "id" => 65,
                "name" => "Ksar El Hirane",
                "city_id" => 3,
            ],
            [
                "id" => 66,
                "name" => "Bennasser Benchohra",
                "city_id" => 3,
            ],
            [
                "id" => 67,
                "name" => "Sidi Makhlouf",
                "city_id" => 3,
            ],
            [
                "id" => 68,
                "name" => "Hassi Delaa",
                "city_id" => 3,
            ],
            [
                "id" => 69,
                "name" => "Hassi R'Mel",
                "city_id" => 3,
            ],
            [
                "id" => 70,
                "name" => "Aïn Madhi",
                "city_id" => 3,
            ],
            [
                "id" => 71,
                "name" => "Tadjemout",
                "city_id" => 3,
            ],
            [
                "id" => 72,
                "name" => "Kheneg",
                "city_id" => 3,
            ],
            [
                "id" => 73,
                "name" => "Gueltat Sidi Saad",
                "city_id" => 3,
            ],
            [
                "id" => 74,
                "name" => "Aïn Sidi Ali",
                "city_id" => 3,
            ],
            [
                "id" => 75,
                "name" => "Beidha",
                "city_id" => 3,
            ],
            [
                "id" => 76,
                "name" => "Brida",
                "city_id" => 3,
            ],
            [
                "id" => 77,
                "name" => "El Ghicha",
                "city_id" => 3,
            ],
            [
                "id" => 78,
                "name" => "Hadj Mechri",
                "city_id" => 3,
            ],
            [
                "id" => 79,
                "name" => "Sebgag",
                "city_id" => 3,
            ],
            [
                "id" => 80,
                "name" => "Taouiala",
                "city_id" => 3,
            ],
            [
                "id" => 81,
                "name" => "Tadjrouna",
                "city_id" => 3
                ,],
            [
                "id" => 82,
                "name" => "Aflou",
                "city_id" => 3
                ,],
            [
                "id" => 83,
                "name" => "El Assafia",
                "city_id" => 3
                ,],
            [
                "id" => 84,
                "name" => "Oued Morra",
                "city_id" => 3
                ,],
            [
                "id" => 85,
                "name" => "Oued M'Zi",
                "city_id" => 3
                ,],
            [
                "id" => 86,
                "name" => "El Houaita",
                "city_id" => 3
                ,],
            [
                "id" => 87,
                "name" => "Sidi Bouzid",
                "city_id" => 3
                ,],
            [
                "id" => 88,
                "name" => "Oum el Bouaghi",
                "city_id" => 4
                ,],
            [
                "id" => 89,
                "name" => "Aïn Beïda",
                "city_id" => 4
                ,],
            [
                "id" => 90,
                "name" => "Aïn M'lila",
                "city_id" => 4
                ,],
            [
                "id" => 91,
                "name" => "Behir Chergui",
                "city_id" => 4
                ,],
            [
                "id" => 92,
                "name" => "El Amiria",
                "city_id" => 4
                ,],
            [
                "id" => 93,
                "name" => "Sigus",
                "city_id" => 4
                ,],
            [
                "id" => 94,
                "name" => "El Belala",
                "city_id" => 4
                ,],
            [
                "id" => 95,
                "name" => "Aïn Babouche",
                "city_id" => 4
                ,],
            [
                "id" => 96,
                "name" => "Berriche",
                "city_id" => 4
                ,],
            [
                "id" => 97,
                "name" => "Ouled Hamla",
                "city_id" => 4
                ,],
            [
                "id" => 98,
                "name" => "Dhalaa",
                "city_id" => 4
                ,],
            [
                "id" => 99,
                "name" => "Aïn Kercha",
                "city_id" => 4
                ,],
            [
                "id" => 100,
                "name" => "Hanchir Toumghani",
                "city_id" => 4
                ,],
            [
                "id" => 101,
                "name" => "El Djazia",
                "city_id" => 4
                ,],
            [
                "id" => 102,
                "name" => "Aïn Diss",
                "city_id" => 4
                ,],
            [
                "id" => 103,
                "name" => "Fkirina",
                "city_id" => 4
                ,],
            [
                "id" => 104,
                "name" => "Souk Naamane",
                "city_id" => 4
                ,],
            [
                "id" => 105,
                "name" => "Zorg",
                "city_id" => 4
                ,],
            [
                "id" => 106,
                "name" => "El Fedjoudj Boughrara Saoudi",
                "city_id" => 4
                ,],
            [
                "id" => 107,
                "name" => "Ouled Zouaï",
                "city_id" => 4
                ,],
            [
                "id" => 108,
                "name" => "Bir Chouhada",
                "city_id" => 4
                ,],
            [
                "id" => 109,
                "name" => "Ksar Sbahi",
                "city_id" => 4
                ,],
            [
                "id" => 110,
                "name" => "Oued Nini",
                "city_id" => 4
                ,],
            [
                "id" => 111,
                "name" => "Meskiana",
                "city_id" => 4
                ,],
            [
                "id" => 112,
                "name" => "Aïn Fakroun",
                "city_id" => 4
                ,],
            [
                "id" => 113,
                "name" => "Rahia",
                "city_id" => 4
                ,],
            [
                "id" => 114,
                "name" => "Aïn Zitoun",
                "city_id" => 4
                ,],
            [
                "id" => 115,
                "name" => "Ouled Gacem",
                "city_id" => 4
                ,],
            [
                "id" => 116,
                "name" => "El Harmilia",
                "city_id" => 4
                ,],
            [
                "id" => 117,
                "name" => "Batna",
                "city_id" => 5
                ,],
            [
                "id" => 118,
                "name" => "Ghassira",
                "city_id" => 5
                ,],
            [
                "id" => 119,
                "name" => "Maafa",
                "city_id" => 5
                ,],
            [
                "id" => 120,
                "name" => "Merouana",
                "city_id" => 5
                ,],
            [
                "id" => 121,
                "name" => "Seriana",
                "city_id" => 5
                ,],
            [
                "id" => 122,
                "name" => "Menaa",
                "city_id" => 5
                ,],
            [
                "id" => 123,
                "name" => "El Madher",
                "city_id" => 5
                ,],
            [
                "id" => 124,
                "name" => "Tazoult",
                "city_id" => 5
                ,],
            [
                "id" => 125,
                "name" => "N'Gaous",
                "city_id" => 5
                ,],
            [
                "id" => 126,
                "name" => "Guigba",
                "city_id" => 5
                ,],
            [
                "id" => 127,
                "name" => "Inoughissen",
                "city_id" => 5
                ,],
            [
                "id" => 128,
                "name" => "Ouyoun El Assafir",
                "city_id" => 5
                ,],
            [
                "id" => 129,
                "name" => "Djerma",
                "city_id" => 5
                ,],
            [
                "id" => 130,
                "name" => "Bitam",
                "city_id" => 5
                ,],
            [
                "id" => 131,
                "name" => "Abdelkader Azil",
                "city_id" => 5
                ,],
            [
                "id" => 132,
                "name" => "Arris",
                "city_id" => 5
                ,],
            [
                "id" => 133,
                "name" => "Kimmel",
                "city_id" => 5
                ,],
            [
                "id" => 134,
                "name" => "Tilatou",
                "city_id" => 5
                ,],
            [
                "id" => 135,
                "name" => "Aïn Djasser",
                "city_id" => 5
                ,],
            [
                "id" => 136,
                "name" => "Ouled Sellam",
                "city_id" => 5
                ,],
            [
                "id" => 137,
                "name" => "Tigherghar",
                "city_id" => 5
                ,],
            [
                "id" => 138,
                "name" => "Aïn Yagout",
                "city_id" => 5
                ,],
            [
                "id" => 139,
                "name" => "Sefiane",
                "city_id" => 5
                ,],
            [
                "id" => 140,
                "name" => "Fesdis",
                "city_id" => 5
                ,],
            [
                "id" => 141,
                "name" => "Rahbat",
                "city_id" => 5
                ,],
            [
                "id" => 142,
                "name" => "Tighanimine",
                "city_id" => 5
                ,],
            [
                "id" => 143,
                "name" => "Lemsane",
                "city_id" => 5
                ,],
            [
                "id" => 144,
                "name" => "Ksar Bellezma",
                "city_id" => 5
                ,],
            [
                "id" => 145,
                "name" => "Seggana",
                "city_id" => 5
                ,],
            [
                "id" => 146,
                "name" => "Ichmoul",
                "city_id" => 5
                ,],
            [
                "id" => 147,
                "name" => "Foum Toub",
                "city_id" => 5
                ,],
            [
                "id" => 148,
                "name" => "Ben Foudhala El Hakania",
                "city_id" => 5
                ,],
            [
                "id" => 149,
                "name" => "Oued El Ma",
                "city_id" => 5
                ,],
            [
                "id" => 150,
                "name" => "Talkhamt",
                "city_id" => 5
                ,],
            [
                "id" => 151,
                "name" => "Bouzina",
                "city_id" => 5
                ,],
            [
                "id" => 152,
                "name" => "Chemora",
                "city_id" => 5
                ,],
            [
                "id" => 153,
                "name" => "Oued Chaaba",
                "city_id" => 5
                ,],
            [
                "id" => 154,
                "name" => "Taxlent",
                "city_id" => 5
                ,],
            [
                "id" => 155,
                "name" => "Gosbat",
                "city_id" => 5
                ,],
            [
                "id" => 156,
                "name" => "Ouled Aouf",
                "city_id" => 5
                ,],
            [
                "id" => 157,
                "name" => "Boumagueur",
                "city_id" => 5
                ,],
            [
                "id" => 158,
                "name" => "Barika",
                "city_id" => 5
                ,],
            [
                "id" => 159,
                "name" => "Djezar",
                "city_id" => 5
                ,],
            [
                "id" => 160,
                "name" => "T'Kout",
                "city_id" => 5
                ,],
            [
                "id" => 161,
                "name" => "Aïn Touta",
                "city_id" => 5
                ,],
            [
                "id" => 162,
                "name" => "Hidoussa",
                "city_id" => 5
                ,],
            [
                "id" => 163,
                "name" => "Teniet El Abed",
                "city_id" => 5
                ,],
            [
                "id" => 164,
                "name" => "Oued Taga",
                "city_id" => 5
                ,],
            [
                "id" => 165,
                "name" => "Ouled Fadel",
                "city_id" => 5
                ,],
            [
                "id" => 166,
                "name" => "Timgad",
                "city_id" => 5
                ,],
            [
                "id" => 167,
                "name" => "Ras El Aioun",
                "city_id" => 5
                ,],
            [
                "id" => 168,
                "name" => "Chir",
                "city_id" => 5
                ,],
            [
                "id" => 169,
                "name" => "Ouled Si Slimane",
                "city_id" => 5
                ,],
            [
                "id" => 170,
                "name" => "Zanat El Beida",
                "city_id" => 5
                ,],
            [
                "id" => 171,
                "name" => "M'doukel",
                "city_id" => 5
                ,],
            [
                "id" => 172,
                "name" => "Ouled Ammar",
                "city_id" => 5
                ,],
            [
                "id" => 173,
                "name" => "El Hassi",
                "city_id" => 5
                ,],
            [
                "id" => 174,
                "name" => "Lazrou",
                "city_id" => 5
                ,],
            [
                "id" => 175,
                "name" => "Boumia",
                "city_id" => 5
                ,],
            [
                "id" => 176,
                "name" => "Boulhilat",
                "city_id" => 5
                ,],
            [
                "id" => 177,
                "name" => "Larbaâ",
                "city_id" => 5
                ,],
            [
                "id" => 178,
                "name" => "Béjaïa",
                "city_id" => 6
                ,],
            [
                "id" => 179,
                "name" => "Amizour",
                "city_id" => 6
                ,],
            [
                "id" => 180,
                "name" => "Ferraoun",
                "city_id" => 6
                ,],
            [
                "id" => 181,
                "name" => "Taourirt Ighil",
                "city_id" => 6
                ,],
            [
                "id" => 182,
                "name" => "Chellata",
                "city_id" => 6
                ,],
            [
                "id" => 183,
                "name" => "Tamokra",
                "city_id" => 6
                ,],
            [
                "id" => 184,
                "name" => "Timezrit",
                "city_id" => 6
                ,],
            [
                "id" => 185,
                "name" => "Souk El Ténine",
                "city_id" => 6
                ,],
            [
                "id" => 186,
                "name" => "M'cisna",
                "city_id" => 6
                ,],
            [
                "id" => 187,
                "name" => "Tinabdher",
                "city_id" => 6
                ,],
            [
                "id" => 188,
                "name" => "Tichy",
                "city_id" => 6
                ,],
            [
                "id" => 189,
                "name" => "Semaoun",
                "city_id" => 6
                ,],
            [
                "id" => 190,
                "name" => "Kendira",
                "city_id" => 6
                ,],
            [
                "id" => 191,
                "name" => "Tifra",
                "city_id" => 6
                ,],
            [
                "id" => 192,
                "name" => "Ighram",
                "city_id" => 6
                ,],
            [
                "id" => 193,
                "name" => "Amalou",
                "city_id" => 6
                ,],
            [
                "id" => 194,
                "name" => "Ighil Ali",
                "city_id" => 6
                ,],
            [
                "id" => 195,
                "name" => "Fenaïa Ilmaten",
                "city_id" => 6
                ,],
            [
                "id" => 196,
                "name" => "Toudja",
                "city_id" => 6
                ,],
            [
                "id" => 197,
                "name" => "Darguina",
                "city_id" => 6
                ,],
            [
                "id" => 198,
                "name" => "Sidi-Ayad",
                "city_id" => 6
                ,],
            [
                "id" => 199,
                "name" => "Aokas",
                "city_id" => 6
                ,],
            [
                "id" => 200,
                "name" => "Ait Djellil",
                "city_id" => 6
                ,],
            [
                "id" => 201,
                "name" => "Adekar",
                "city_id" => 6
                ,],
            [
                "id" => 202,
                "name" => "Akbou",
                "city_id" => 6
                ,],
            [
                "id" => 203,
                "name" => "Seddouk",
                "city_id" => 6
                ,],
            [
                "id" => 204,
                "name" => "Tazmalt",
                "city_id" => 6
                ,],
            [
                "id" => 205,
                "name" => "Aït-R'zine",
                "city_id" => 6
                ,],
            [
                "id" => 206,
                "name" => "Chemini",
                "city_id" => 6
                ,],
            [
                "id" => 207,
                "name" => "Souk-Oufella",
                "city_id" => 6
                ,],
            [
                "id" => 208,
                "name" => "Tibane",
                "city_id" => 6
                ,],
            [
                "id" => 209,
                "name" => "Tala Hamza",
                "city_id" => 6
                ,],
            [
                "id" => 210,
                "name" => "Barbacha",
                "city_id" => 6
                ,],
            [
                "id" => 211,
                "name" => "Aït Ksila",
                "city_id" => 6
                ,],
            [
                "id" => 212,
                "name" => "Ouzellaguen",
                "city_id" => 6
                ,],
            [
                "id" => 213,
                "name" => "Bouhamza",
                "city_id" => 6
                ,],
            [
                "id" => 214,
                "name" => "Taskriout",
                "city_id" => 6
                ,],
            [
                "id" => 215,
                "name" => "Beni Mellikeche",
                "city_id" => 6
                ,],
            [
                "id" => 216,
                "name" => "Sidi-Aïch",
                "city_id" => 6
                ,],
            [
                "id" => 217,
                "name" => "El Kseur",
                "city_id" => 6
                ,],
            [
                "id" => 218,
                "name" => "Melbou",
                "city_id" => 6
                ,],
            [
                "id" => 219,
                "name" => "Akfadou",
                "city_id" => 6
                ,],
            [
                "id" => 220,
                "name" => "Leflaye",
                "city_id" => 6
                ,],
            [
                "id" => 221,
                "name" => "Kherrata",
                "city_id" => 6
                ,],
            [
                "id" => 222,
                "name" => "Draâ El-Kaïd",
                "city_id" => 6
                ,],
            [
                "id" => 223,
                "name" => "Tamridjet",
                "city_id" => 6
                ,],
            [
                "id" => 224,
                "name" => "Aït-Smail",
                "city_id" => 6
                ,],
            [
                "id" => 225,
                "name" => "Boukhelifa",
                "city_id" => 6
                ,],
            [
                "id" => 226,
                "name" => "Tizi N'Berber",
                "city_id" => 6
                ,],
            [
                "id" => 227,
                "name" => "Aït Maouche",
                "city_id" => 6
                ,],
            [
                "id" => 228,
                "name" => "Oued Ghir",
                "city_id" => 6
                ,],
            [
                "id" => 229,
                "name" => "Boudjellil",
                "city_id" => 6
                ,],
            [
                "id" => 230,
                "name" => "Aïn Naga",
                "city_id" => 7
                ,],
            [
                "id" => 231,
                "name" => "Aïn Zaatout",
                "city_id" => 7
                ,],
            [
                "id" => 232,
                "name" => "Besbes",
                "city_id" => 7
                ,],
            [
                "id" => 233,
                "name" => "Biskra",
                "city_id" => 7
                ,],
            [
                "id" => 234,
                "name" => "Bordj Ben Azzouz",
                "city_id" => 7
                ,],
            [
                "id" => 235,
                "name" => "Bouchagroune",
                "city_id" => 7
                ,],
            [
                "id" => 236,
                "name" => "Branis",
                "city_id" => 7
                ,],
            [
                "id" => 237,
                "name" => "Chetma",
                "city_id" => 7
                ,],
            [
                "id" => 238,
                "name" => "Djemorah",
                "city_id" => 7
                ,],
            [
                "id" => 239,
                "name" => "Doucen",
                "city_id" => 7
                ,],
            [
                "id" => 240,
                "name" => "Ech Chaïba",
                "city_id" => 7
                ,],
            [
                "id" => 241,
                "name" => "El Feidh",
                "city_id" => 7
                ,],
            [
                "id" => 242,
                "name" => "El Ghrous",
                "city_id" => 7
                ,],
            [
                "id" => 243,
                "name" => "El Hadjeb",
                "city_id" => 7
                ,],
            [
                "id" => 244,
                "name" => "El Haouch",
                "city_id" => 7
                ,],
            [
                "id" => 245,
                "name" => "El Kantara",
                "city_id" => 7
                ,],
            [
                "id" => 246,
                "name" => "El Mizaraa",
                "city_id" => 7
                ,],
            [
                "id" => 247,
                "name" => "El Outaya",
                "city_id" => 7
                ,],
            [
                "id" => 248,
                "name" => "Foughala",
                "city_id" => 7
                ,],
            [
                "id" => 249,
                "name" => "Khenguet Sidi Nadji",
                "city_id" => 7
                ,],
            [
                "id" => 250,
                "name" => "Lichana",
                "city_id" => 7
                ,],
            [
                "id" => 251,
                "name" => "Lioua",
                "city_id" => 7
                ,],
            [
                "id" => 252,
                "name" => "M'Chouneche",
                "city_id" => 7
                ,],
            [
                "id" => 253,
                "name" => "Mekhadma",
                "city_id" => 7
                ,],
            [
                "id" => 254,
                "name" => "M'Lili",
                "city_id" => 7
                ,],
            [
                "id" => 255,
                "name" => "Ouled Djellal",
                "city_id" => 7
                ,],
            [
                "id" => 256,
                "name" => "Oumache",
                "city_id" => 7
                ,],
            [
                "id" => 257,
                "name" => "Ourlal",
                "city_id" => 7
                ,],
            [
                "id" => 258,
                "name" => "Ras El Miaad",
                "city_id" => 7
                ,],
            [
                "id" => 259,
                "name" => "Sidi Khaled",
                "city_id" => 7
                ,],
            [
                "id" => 260,
                "name" => "Sidi Okba",
                "city_id" => 7
                ,],
            [
                "id" => 261,
                "name" => "Tolga",
                "city_id" => 7
                ,],
            [
                "id" => 262,
                "name" => "Zeribet El Oued",
                "city_id" => 7
                ,],
            [
                "id" => 263,
                "name" => "Béchar",
                "city_id" => 8
                ,],
            [
                "id" => 264,
                "name" => "Erg Ferradj",
                "city_id" => 8
                ,],
            [
                "id" => 265,
                "name" => "Ouled Khoudir",
                "city_id" => 8
                ,],
            [
                "id" => 266,
                "name" => "Meridja",
                "city_id" => 8
                ,],
            [
                "id" => 267,
                "name" => "Timoudi",
                "city_id" => 8
                ,],
            [
                "id" => 268,
                "name" => "Lahmar",
                "city_id" => 8
                ,],
            [
                "id" => 269,
                "name" => "Béni Abbès",
                "city_id" => 8
                ,],
            [
                "id" => 270,
                "name" => "Beni Ikhlef",
                "city_id" => 8
                ,],
            [
                "id" => 271,
                "name" => "Mechraa Houari Boumedienne",
                "city_id" => 8
                ,],
            [
                "id" => 272,
                "name" => "Kenadsa",
                "city_id" => 8
                ,],
            [
                "id" => 273,
                "name" => "Igli",
                "city_id" => 8
                ,],
            [
                "id" => 274,
                "name" => "Tabelbala",
                "city_id" => 8
                ,],
            [
                "id" => 275,
                "name" => "Taghit",
                "city_id" => 8
                ,],
            [
                "id" => 276,
                "name" => "El Ouata",
                "city_id" => 8
                ,],
            [
                "id" => 277,
                "name" => "Boukais",
                "city_id" => 8
                ,],
            [
                "id" => 278,
                "name" => "Mougheul",
                "city_id" => 8
                ,],
            [
                "id" => 279,
                "name" => "Abadla",
                "city_id" => 8
                ,],
            [
                "id" => 280,
                "name" => "Kerzaz",
                "city_id" => 8
                ,],
            [
                "id" => 281,
                "name" => "Ksabi",
                "city_id" => 8
                ,],
            [
                "id" => 282,
                "name" => "Tamtert",
                "city_id" => 8
                ,],
            [
                "id" => 283,
                "name" => "Beni Ounif",
                "city_id" => 8
                ,],
            [
                "id" => 284,
                "name" => "Blida",
                "city_id" => 9
                ,],
            [
                "id" => 285,
                "name" => "Chebli",
                "city_id" => 9
                ,],
            [
                "id" => 286,
                "name" => "Bouinan",
                "city_id" => 9
                ,],
            [
                "id" => 287,
                "name" => "Oued Alleug",
                "city_id" => 9
                ,],
            [
                "id" => 288,
                "name" => "Ouled Yaïch",
                "city_id" => 9
                ,],
            [
                "id" => 289,
                "name" => "Chréa",
                "city_id" => 9
                ,],
            [
                "id" => 290,
                "name" => "El Affroun",
                "city_id" => 9
                ,],
            [
                "id" => 291,
                "name" => "Chiffa",
                "city_id" => 9
                ,],
            [
                "id" => 292,
                "name" => "Hammam Melouane",
                "city_id" => 9
                ,],
            [
                "id" => 293,
                "name" => "Benkhelil",
                "city_id" => 9
                ,],
            [
                "id" => 294,
                "name" => "Soumaa",
                "city_id" => 9
                ,],
            [
                "id" => 295,
                "name" => "Mouzaia",
                "city_id" => 9
                ,],
            [
                "id" => 296,
                "name" => "Souhane",
                "city_id" => 9
                ,],
            [
                "id" => 297,
                "name" => "Meftah",
                "city_id" => 9
                ,],
            [
                "id" => 298,
                "name" => "Ouled Slama",
                "city_id" => 9
                ,],
            [
                "id" => 299,
                "name" => "Boufarik",
                "city_id" => 9
                ,],
            [
                "id" => 300,
                "name" => "Larbaa",
                "city_id" => 9
                ,],
            [
                "id" => 301,
                "name" => "Oued Djer",
                "city_id" => 9
                ,],
            [
                "id" => 302,
                "name" => "Beni Tamou",
                "city_id" => 9
                ,],
            [
                "id" => 303,
                "name" => "Bouarfa",
                "city_id" => 9
                ,],
            [
                "id" => 304,
                "name" => "Beni Mered",
                "city_id" => 9
                ,],
            [
                "id" => 305,
                "name" => "Bougara",
                "city_id" => 9
                ,],
            [
                "id" => 306,
                "name" => "Guerouaou",
                "city_id" => 9
                ,],
            [
                "id" => 307,
                "name" => "Aïn Romana",
                "city_id" => 9
                ,],
            [
                "id" => 308,
                "name" => "Djebabra",
                "city_id" => 9
                ,],
            [
                "id" => 309,
                "name" => "Aïn Bessem",
                "city_id" => 10
                ,],
            [
                "id" => 310,
                "name" => "Hanif",
                "city_id" => 10
                ,],
            [
                "id" => 311,
                "name" => "Aghbalou",
                "city_id" => 10
                ,],
            [
                "id" => 312,
                "name" => "Aïn El Hadjar",
                "city_id" => 10
                ,],
            [
                "id" => 313,
                "name" => "Ahl El Ksar",
                "city_id" => 10
                ,],
            [
                "id" => 314,
                "name" => "Aïn Laloui",
                "city_id" => 10
                ,],
            [
                "id" => 315,
                "name" => "Ath Mansour",
                "city_id" => 10
                ,],
            [
                "id" => 316,
                "name" => "Aomar",
                "city_id" => 10
                ,],
            [
                "id" => 317,
                "name" => "Aïn El Turc",
                "city_id" => 10
                ,],
            [
                "id" => 318,
                "name" => "Aït Laziz",
                "city_id" => 10
                ,],
            [
                "id" => 319,
                "name" => "Bouderbala",
                "city_id" => 10
                ,],
            [
                "id" => 320,
                "name" => "Bechloul",
                "city_id" => 10
                ,],
            [
                "id" => 321,
                "name" => "Bir Ghbalou",
                "city_id" => 10
                ,],
            [
                "id" => 322,
                "name" => "Boukram",
                "city_id" => 10
                ,],
            [
                "id" => 323,
                "name" => "Bordj Okhriss",
                "city_id" => 10
                ,],
            [
                "id" => 324,
                "name" => "Bouira",
                "city_id" => 10
                ,],
            [
                "id" => 325,
                "name" => "Chorfa",
                "city_id" => 10
                ,],
            [
                "id" => 326,
                "name" => "Dechmia",
                "city_id" => 10
                ,],
            [
                "id" => 327,
                "name" => "Dirrah",
                "city_id" => 10
                ,],
            [
                "id" => 328,
                "name" => "Djebahia",
                "city_id" => 10
                ,],
            [
                "id" => 329,
                "name" => "El Hakimia",
                "city_id" => 10
                ,],
            [
                "id" => 330,
                "name" => "El Hachimia",
                "city_id" => 10
                ,],
            [
                "id" => 331,
                "name" => "El Adjiba",
                "city_id" => 10
                ,],
            [
                "id" => 332,
                "name" => "El Khabouzia",
                "city_id" => 10
                ,],
            [
                "id" => 333,
                "name" => "El Mokrani",
                "city_id" => 10
                ,],
            [
                "id" => 334,
                "name" => "El Asnam",
                "city_id" => 10
                ,],
            [
                "id" => 335,
                "name" => "Guerrouma",
                "city_id" => 10
                ,],
            [
                "id" => 336,
                "name" => "Haizer",
                "city_id" => 10
                ,],
            [
                "id" => 337,
                "name" => "Hadjera Zerga",
                "city_id" => 10
                ,],
            [
                "id" => 338,
                "name" => "Kadiria",
                "city_id" => 10
                ,],
            [
                "id" => 339,
                "name" => "Lakhdaria",
                "city_id" => 10
                ,],
            [
                "id" => 340,
                "name" => "M'Chedallah",
                "city_id" => 10
                ,],
            [
                "id" => 341,
                "name" => "Mezdour",
                "city_id" => 10
                ,],
            [
                "id" => 342,
                "name" => "Maala",
                "city_id" => 10
                ,],
            [
                "id" => 343,
                "name" => "Maamora",
                "city_id" => 10
                ,],
            [
                "id" => 344,
                "name" => "Oued El Berdi",
                "city_id" => 10
                ,],
            [
                "id" => 345,
                "name" => "Ouled Rached",
                "city_id" => 10
                ,],
            [
                "id" => 346,
                "name" => "Raouraoua",
                "city_id" => 10
                ,],
            [
                "id" => 347,
                "name" => "Ridane",
                "city_id" => 10
                ,],
            [
                "id" => 348,
                "name" => "Saharidj",
                "city_id" => 10
                ,],
            [
                "id" => 349,
                "name" => "Sour El Ghouzlane",
                "city_id" => 10
                ,],
            [
                "id" => 350,
                "name" => "Souk El Khemis",
                "city_id" => 10
                ,],
            [
                "id" => 351,
                "name" => "Taguedit",
                "city_id" => 10
                ,],
            [
                "id" => 352,
                "name" => "Taghzout",
                "city_id" => 10
                ,],
            [
                "id" => 353,
                "name" => "Zbarbar",
                "city_id" => 10
                ,],
            [
                "id" => 354,
                "name" => "Tamanrasset",
                "city_id" => 11
                ,],
            [
                "id" => 355,
                "name" => "Abalessa",
                "city_id" => 11
                ,],
            [
                "id" => 356,
                "name" => "In Ghar",
                "city_id" => 11
                ,],
            [
                "id" => 357,
                "name" => "In Guezzam",
                "city_id" => 11
                ,],
            [
                "id" => 358,
                "name" => "Idles",
                "city_id" => 11
                ,],
            [
                "id" => 359,
                "name" => "Tazrouk",
                "city_id" => 11
                ,],
            [
                "id" => 360,
                "name" => "Tin Zaouatine",
                "city_id" => 11
                ,],
            [
                "id" => 361,
                "name" => "In Salah",
                "city_id" => 11
                ,],
            [
                "id" => 362,
                "name" => "In Amguel",
                "city_id" => 11
                ,],
            [
                "id" => 363,
                "name" => "Foggaret Ezzaouia",
                "city_id" => 11
                ,],
            [
                "id" => 364,
                "name" => "Tébessa",
                "city_id" => 12
                ,],
            [
                "id" => 365,
                "name" => "Bir el-Ater",
                "city_id" => 12
                ,],
            [
                "id" => 366,
                "name" => "Cheria",
                "city_id" => 12
                ,],
            [
                "id" => 367,
                "name" => "Stah Guentis",
                "city_id" => 12
                ,],
            [
                "id" => 368,
                "name" => "El Aouinet",
                "city_id" => 12
                ,],
            [
                "id" => 369,
                "name" => "El Houidjbet",
                "city_id" => 12
                ,],
            [
                "id" => 370,
                "name" => "Safsaf El Ouesra",
                "city_id" => 12
                ,],
            [
                "id" => 371,
                "name" => "Hammamet",
                "city_id" => 12
                ,],
            [
                "id" => 372,
                "name" => "Negrine",
                "city_id" => 12
                ,],
            [
                "id" => 373,
                "name" => "Bir Mokkadem",
                "city_id" => 12
                ,],
            [
                "id" => 374,
                "name" => "El Kouif",
                "city_id" => 12
                ,],
            [
                "id" => 375,
                "name" => "Morsott",
                "city_id" => 12
                ,],
            [
                "id" => 376,
                "name" => "El Ogla",
                "city_id" => 12
                ,],
            [
                "id" => 377,
                "name" => "Bir Dheb",
                "city_id" => 12
                ,],
            [
                "id" => 378,
                "name" => "Ogla Melha",
                "city_id" => 12
                ,],
            [
                "id" => 379,
                "name" => "Guorriguer",
                "city_id" => 12
                ,],
            [
                "id" => 380,
                "name" => "Bekkaria",
                "city_id" => 12
                ,],
            [
                "id" => 381,
                "name" => "Boukhadra",
                "city_id" => 12
                ,],
            [
                "id" => 382,
                "name" => "Ouenza",
                "city_id" => 12
                ,],
            [
                "id" => 383,
                "name" => "El Ma Labiodh",
                "city_id" => 12
                ,],
            [
                "id" => 384,
                "name" => "Oum Ali",
                "city_id" => 12
                ,],
            [
                "id" => 385,
                "name" => "Tlidjene",
                "city_id" => 12
                ,],
            [
                "id" => 386,
                "name" => "Aïn Zerga",
                "city_id" => 12
                ,],
            [
                "id" => 387,
                "name" => "El Meridj",
                "city_id" => 12
                ,],
            [
                "id" => 388,
                "name" => "Boulhaf Dir",
                "city_id" => 12
                ,],
            [
                "id" => 389,
                "name" => "Bedjene",
                "city_id" => 12
                ,],
            [
                "id" => 390,
                "name" => "El Mezeraa",
                "city_id" => 12
                ,],
            [
                "id" => 391,
                "name" => "Ferkane",
                "city_id" => 12
                ,],
            [
                "id" => 392,
                "name" => "Tlemcen",
                "city_id" => 13
                ,],
            [
                "id" => 393,
                "name" => "Beni Mester",
                "city_id" => 13
                ,],
            [
                "id" => 394,
                "name" => "Aïn Tallout",
                "city_id" => 13
                ,],
            [
                "id" => 395,
                "name" => "Remchi",
                "city_id" => 13
                ,],
            [
                "id" => 396,
                "name" => "El Fehoul",
                "city_id" => 13
                ,],
            [
                "id" => 397,
                "name" => "Sabra",
                "city_id" => 13
                ,],
            [
                "id" => 398,
                "name" => "Ghazaouet",
                "city_id" => 13
                ,],
            [
                "id" => 399,
                "name" => "Souani",
                "city_id" => 13
                ,],
            [
                "id" => 400,
                "name" => "Djebala",
                "city_id" => 13
                ,],
            [
                "id" => 401,
                "name" => "El Gor",
                "city_id" => 13
                ,],
            [
                "id" => 402,
                "name" => "Oued Lakhdar",
                "city_id" => 13
                ,],
            [
                "id" => 403,
                "name" => "Aïn Fezza",
                "city_id" => 13
                ,],
            [
                "id" => 404,
                "name" => "Ouled Mimoun",
                "city_id" => 13
                ,],
            [
                "id" => 405,
                "name" => "Amieur",
                "city_id" => 13
                ,],
            [
                "id" => 406,
                "name" => "Aïn Youcef",
                "city_id" => 13
                ,],
            [
                "id" => 407,
                "name" => "Zenata",
                "city_id" => 13
                ,],
            [
                "id" => 408,
                "name" => "Beni Snous",
                "city_id" => 13
                ,],
            [
                "id" => 409,
                "name" => "Bab El Assa",
                "city_id" => 13
                ,],
            [
                "id" => 410,
                "name" => "Dar Yaghmouracene",
                "city_id" => 13
                ,],
            [
                "id" => 411,
                "name" => "Fellaoucene",
                "city_id" => 13
                ,],
            [
                "id" => 412,
                "name" => "Azails",
                "city_id" => 13
                ,],
            [
                "id" => 413,
                "name" => "Sebaa Chioukh",
                "city_id" => 13
                ,],
            [
                "id" => 414,
                "name" => "Terny Beni Hdiel",
                "city_id" => 13
                ,],
            [
                "id" => 415,
                "name" => "Bensekrane",
                "city_id" => 13
                ,],
            [
                "id" => 416,
                "name" => "Aïn Nehala",
                "city_id" => 13
                ,],
            [
                "id" => 417,
                "name" => "Hennaya",
                "city_id" => 13
                ,],
            [
                "id" => 418,
                "name" => "Maghnia",
                "city_id" => 13
                ,],
            [
                "id" => 419,
                "name" => "Hammam Boughrara",
                "city_id" => 13
                ,],
            [
                "id" => 420,
                "name" => "Souahlia",
                "city_id" => 13
                ,],
            [
                "id" => 421,
                "name" => "MSirda Fouaga",
                "city_id" => 13
                ,],
            [
                "id" => 422,
                "name" => "Aïn Fetah",
                "city_id" => 13
                ,],
            [
                "id" => 423,
                "name" => "El Aricha",
                "city_id" => 13
                ,],
            [
                "id" => 424,
                "name" => "Souk Tlata",
                "city_id" => 13
                ,],
            [
                "id" => 425,
                "name" => "Sidi Abdelli",
                "city_id" => 13
                ,],
            [
                "id" => 426,
                "name" => "Sebdou",
                "city_id" => 13
                ,],
            [
                "id" => 427,
                "name" => "Beni Ouarsous",
                "city_id" => 13
                ,],
            [
                "id" => 428,
                "name" => "Sidi Medjahed",
                "city_id" => 13
                ,],
            [
                "id" => 429,
                "name" => "Beni Boussaid",
                "city_id" => 13
                ,],
            [
                "id" => 430,
                "name" => "Marsa Ben M'Hidi",
                "city_id" => 13
                ,],
            [
                "id" => 431,
                "name" => "Nedroma",
                "city_id" => 13
                ,],
            [
                "id" => 432,
                "name" => "Sidi Djillali",
                "city_id" => 13
                ,],
            [
                "id" => 433,
                "name" => "Beni Bahdel",
                "city_id" => 13
                ,],
            [
                "id" => 434,
                "name" => "El Bouihi",
                "city_id" => 13
                ,],
            [
                "id" => 435,
                "name" => "Honaïne",
                "city_id" => 13
                ,],
            [
                "id" => 436,
                "name" => "Tienet",
                "city_id" => 13
                ,],
            [
                "id" => 437,
                "name" => "Ouled Riyah",
                "city_id" => 13
                ,],
            [
                "id" => 438,
                "name" => "Bouhlou",
                "city_id" => 13
                ,],
            [
                "id" => 439,
                "name" => "Beni Khellad",
                "city_id" => 13
                ,],
            [
                "id" => 440,
                "name" => "Aïn Ghoraba",
                "city_id" => 13
                ,],
            [
                "id" => 441,
                "name" => "Chetouane",
                "city_id" => 13
                ,],
            [
                "id" => 442,
                "name" => "Mansourah",
                "city_id" => 13
                ,],
            [
                "id" => 443,
                "name" => "Beni Semiel",
                "city_id" => 13
                ,],
            [
                "id" => 444,
                "name" => "Aïn Kebira",
                "city_id" => 13
                ,],
            [
                "id" => 445,
                "name" => "Aïn Bouchekif",
                "city_id" => 14
                ,],
            [
                "id" => 446,
                "name" => "Aïn Deheb",
                "city_id" => 14
                ,],
            [
                "id" => 447,
                "name" => "Aïn El Hadid",
                "city_id" => 14
                ,],
            [
                "id" => 448,
                "name" => "Aïn Kermes",
                "city_id" => 14
                ,],
            [
                "id" => 449,
                "name" => "Aïn Dzarit",
                "city_id" => 14
                ,],
            [
                "id" => 450,
                "name" => "Bougara",
                "city_id" => 14
                ,],
            [
                "id" => 451,
                "name" => "Chehaima",
                "city_id" => 14
                ,],
            [
                "id" => 452,
                "name" => "Dahmouni",
                "city_id" => 14
                ,],
            [
                "id" => 453,
                "name" => "Djebilet Rosfa",
                "city_id" => 14
                ,],
            [
                "id" => 454,
                "name" => "Djillali Ben Amar",
                "city_id" => 14
                ,],
            [
                "id" => 455,
                "name" => "Faidja",
                "city_id" => 14
                ,],
            [
                "id" => 456,
                "name" => "Frenda",
                "city_id" => 14
                ,],
            [
                "id" => 457,
                "name" => "Guertoufa",
                "city_id" => 14
                ,],
            [
                "id" => 458,
                "name" => "Hamadia",
                "city_id" => 14
                ,],
            [
                "id" => 459,
                "name" => "Ksar Chellala",
                "city_id" => 14
                ,],
            [
                "id" => 460,
                "name" => "Madna",
                "city_id" => 14
                ,],
            [
                "id" => 461,
                "name" => "Mahdia",
                "city_id" => 14
                ,],
            [
                "id" => 462,
                "name" => "Mechraa Safa",
                "city_id" => 14
                ,],
            [
                "id" => 463,
                "name" => "Medrissa",
                "city_id" => 14
                ,],
            [
                "id" => 464,
                "name" => "Medroussa",
                "city_id" => 14
                ,],
            [
                "id" => 465,
                "name" => "Meghila",
                "city_id" => 14
                ,],
            [
                "id" => 466,
                "name" => "Mellakou",
                "city_id" => 14
                ,],
            [
                "id" => 467,
                "name" => "Nadorah",
                "city_id" => 14
                ,],
            [
                "id" => 468,
                "name" => "Naima",
                "city_id" => 14
                ,],
            [
                "id" => 469,
                "name" => "Oued Lilli",
                "city_id" => 14
                ,],
            [
                "id" => 470,
                "name" => "Rahouia",
                "city_id" => 14
                ,],
            [
                "id" => 471,
                "name" => "Rechaiga",
                "city_id" => 14
                ,],
            [
                "id" => 472,
                "name" => "Sebaine",
                "city_id" => 14
                ,],
            [
                "id" => 473,
                "name" => "Sebt",
                "city_id" => 14
                ,],
            [
                "id" => 474,
                "name" => "Serghine",
                "city_id" => 14
                ,],
            [
                "id" => 475,
                "name" => "Si Abdelghani",
                "city_id" => 14
                ,],
            [
                "id" => 476,
                "name" => "Sidi Abderahmane",
                "city_id" => 14
                ,],
            [
                "id" => 477,
                "name" => "Sidi Ali Mellal",
                "city_id" => 14
                ,],
            [
                "id" => 478,
                "name" => "Sidi Bakhti",
                "city_id" => 14
                ,],
            [
                "id" => 479,
                "name" => "Sidi Hosni",
                "city_id" => 14
                ,],
            [
                "id" => 480,
                "name" => "Sougueur",
                "city_id" => 14
                ,],
            [
                "id" => 481,
                "name" => "Tagdemt",
                "city_id" => 14
                ,],
            [
                "id" => 482,
                "name" => "Takhemaret",
                "city_id" => 14
                ,],
            [
                "id" => 483,
                "name" => "Tiaret",
                "city_id" => 14
                ,],
            [
                "id" => 484,
                "name" => "Tidda",
                "city_id" => 14
                ,],
            [
                "id" => 485,
                "name" => "Tousnina",
                "city_id" => 14
                ,],
            [
                "id" => 486,
                "name" => "Zmalet El Emir Abdelkader",
                "city_id" => 14
                ,],
            [
                "id" => 487,
                "name" => "Tizi Ouzou",
                "city_id" => 15
                ,],
            [
                "id" => 488,
                "name" => "Ain El Hammam",
                "city_id" => 15
                ,],
            [
                "id" => 489,
                "name" => "Akbil",
                "city_id" => 15
                ,],
            [
                "id" => 490,
                "name" => "Freha",
                "city_id" => 15
                ,],
            [
                "id" => 491,
                "name" => "Souamaâ",
                "city_id" => 15
                ,],
            [
                "id" => 492,
                "name" => "Mechtras",
                "city_id" => 15
                ,],
            [
                "id" => 493,
                "name" => "Irdjen",
                "city_id" => 15
                ,],
            [
                "id" => 494,
                "name" => "Timizart",
                "city_id" => 15
                ,],
            [
                "id" => 495,
                "name" => "Makouda",
                "city_id" => 15
                ,],
            [
                "id" => 496,
                "name" => "Draâ El Mizan",
                "city_id" => 15
                ,],
            [
                "id" => 497,
                "name" => "Tizi Gheniff",
                "city_id" => 15
                ,],
            [
                "id" => 498,
                "name" => "Bounouh",
                "city_id" => 15
                ,],
            [
                "id" => 499,
                "name" => "Aït Chafâa",
                "city_id" => 15
                ,],
            [
                "id" => 500,
                "name" => "Frikat",
                "city_id" => 15
                ,],
            [
                "id" => 501,
                "name" => "Beni Aïssi",
                "city_id" => 15
                ,],
            [
                "id" => 502,
                "name" => "Aït Zmenzer",
                "city_id" => 15
                ,],
            [
                "id" => 503,
                "name" => "Iferhounène",
                "city_id" => 15
                ,],
            [
                "id" => 504,
                "name" => "Azazga",
                "city_id" => 15
                ,],
            [
                "id" => 505,
                "name" => "Illoula Oumalou",
                "city_id" => 15
                ,],
            [
                "id" => 506,
                "name" => "Yakouren",
                "city_id" => 15
                ,],
            [
                "id" => 507,
                "name" => "Larbaâ Nath Irathen",
                "city_id" => 15
                ,],
            [
                "id" => 508,
                "name" => "Tizi Rached",
                "city_id" => 15
                ,],
            [
                "id" => 509,
                "name" => "Zekri",
                "city_id" => 15
                ,],
            [
                "id" => 510,
                "name" => "Ouaguenoun",
                "city_id" => 15
                ,],
            [
                "id" => 511,
                "name" => "Aïn Zaouia",
                "city_id" => 15
                ,],
            [
                "id" => 512,
                "name" => "Imkiren",
                "city_id" => 15
                ,],
            [
                "id" => 513,
                "name" => "Aït Yahia",
                "city_id" => 15
                ,],
            [
                "id" => 514,
                "name" => "Aït Mahmoud",
                "city_id" => 15
                ,],
            [
                "id" => 515,
                "name" => "Mâatkas",
                "city_id" => 15
                ,],
            [
                "id" => 516,
                "name" => "Aït Boumahdi",
                "city_id" => 15
                ,],
            [
                "id" => 517,
                "name" => "Abi Youcef",
                "city_id" => 15
                ,],
            [
                "id" => 518,
                "name" => "Beni Douala",
                "city_id" => 15
                ,],
            [
                "id" => 519,
                "name" => "Illilten",
                "city_id" => 15
                ,],
            [
                "id" => 520,
                "name" => "Bouzeguène",
                "city_id" => 15
                ,],
            [
                "id" => 521,
                "name" => "Aït Aggouacha",
                "city_id" => 15
                ,],
            [
                "id" => 522,
                "name" => "Ouadhia",
                "city_id" => 15
                ,],
            [
                "id" => 523,
                "name" => "Azeffoun",
                "city_id" => 15
                ,],
            [
                "id" => 524,
                "name" => "Tigzirt",
                "city_id" => 15
                ,],
            [
                "id" => 525,
                "name" => "Aït Aïssa Mimoun",
                "city_id" => 15
                ,],
            [
                "id" => 526,
                "name" => "Boghni",
                "city_id" => 15
                ,],
            [
                "id" => 527,
                "name" => "Ifigha",
                "city_id" => 15
                ,],
            [
                "id" => 528,
                "name" => "Aït Oumalou",
                "city_id" => 15
                ,],
            [
                "id" => 529,
                "name" => "Tirmitine",
                "city_id" => 15
                ,],
            [
                "id" => 530,
                "name" => "Akerrou",
                "city_id" => 15
                ,],
            [
                "id" => 531,
                "name" => "Yatafen",
                "city_id" => 15
                ,],
            [
                "id" => 532,
                "name" => "Ath Zikki",
                "city_id" => 15
                ,],
            [
                "id" => 533,
                "name" => "Draâ Ben Khedda",
                "city_id" => 15
                ,],
            [
                "id" => 534,
                "name" => "Aït Ouacif",
                "city_id" => 15
                ,],
            [
                "id" => 535,
                "name" => "Idjeur",
                "city_id" => 15
                ,],
            [
                "id" => 536,
                "name" => "Mekla",
                "city_id" => 15
                ,],
            [
                "id" => 537,
                "name" => "Tizi N'Tleta",
                "city_id" => 15
                ,],
            [
                "id" => 538,
                "name" => "Aït Yenni",
                "city_id" => 15
                ,],
            [
                "id" => 539,
                "name" => "Aghribs",
                "city_id" => 15
                ,],
            [
                "id" => 540,
                "name" => "Iflissen",
                "city_id" => 15
                ,],
            [
                "id" => 541,
                "name" => "Boudjima",
                "city_id" => 15
                ,],
            [
                "id" => 542,
                "name" => "Aït Yahia Moussa",
                "city_id" => 15
                ,],
            [
                "id" => 543,
                "name" => "Souk El Thenine",
                "city_id" => 15
                ,],
            [
                "id" => 544,
                "name" => "Aït Khellili",
                "city_id" => 15
                ,],
            [
                "id" => 545,
                "name" => "Sidi Namane",
                "city_id" => 15
                ,],
            [
                "id" => 546,
                "name" => "Iboudraren",
                "city_id" => 15
                ,],
            [
                "id" => 547,
                "name" => "Agouni Gueghrane",
                "city_id" => 15
                ,],
            [
                "id" => 548,
                "name" => "Mizrana",
                "city_id" => 15
                ,],
            [
                "id" => 549,
                "name" => "Imsouhel",
                "city_id" => 15
                ,],
            [
                "id" => 550,
                "name" => "Tadmaït",
                "city_id" => 15
                ,],
            [
                "id" => 551,
                "name" => "Aït Bouaddou",
                "city_id" => 15
                ,],
            [
                "id" => 552,
                "name" => "Assi Youcef",
                "city_id" => 15
                ,],
            [
                "id" => 553,
                "name" => "Aït Toudert",
                "city_id" => 15
                ,],
            [
                "id" => 554,
                "name" => "Alger-Centre",
                "city_id" => 16
                ,],
            [
                "id" => 555,
                "name" => "Sidi M'Hamed",
                "city_id" => 16
                ,],
            [
                "id" => 556,
                "name" => "El Madania",
                "city_id" => 16
                ,],
            [
                "id" => 557,
                "name" => "Belouizdad",
                "city_id" => 16
                ,],
            [
                "id" => 558,
                "name" => "Bab El Oued",
                "city_id" => 16
                ,],
            [
                "id" => 559,
                "name" => "Bologhine",
                "city_id" => 16
                ,],
            [
                "id" => 560,
                "name" => "Casbah",
                "city_id" => 16
                ,],
            [
                "id" => 561,
                "name" => "Oued Koriche",
                "city_id" => 16
                ,],
            [
                "id" => 562,
                "name" => "Bir Mourad Raïs",
                "city_id" => 16
                ,],
            [
                "id" => 563,
                "name" => "El Biar",
                "city_id" => 16
                ,],
            [
                "id" => 564,
                "name" => "Bouzareah",
                "city_id" => 16
                ,],
            [
                "id" => 565,
                "name" => "Birkhadem",
                "city_id" => 16
                ,],
            [
                "id" => 566,
                "name" => "El Harrach",
                "city_id" => 16
                ,],
            [
                "id" => 567,
                "name" => "Baraki",
                "city_id" => 16
                ,],
            [
                "id" => 568,
                "name" => "Oued Smar",
                "city_id" => 16
                ,],
            [
                "id" => 569,
                "name" => "Bachdjerrah",
                "city_id" => 16
                ,],
            [
                "id" => 570,
                "name" => "Hussein Dey",
                "city_id" => 16
                ,],
            [
                "id" => 571,
                "name" => "Kouba",
                "city_id" => 16
                ,],
            [
                "id" => 572,
                "name" => "Bourouba",
                "city_id" => 16
                ,],
            [
                "id" => 573,
                "name" => "Dar El Beïda",
                "city_id" => 16
                ,],
            [
                "id" => 574,
                "name" => "Bab Ezzouar",
                "city_id" => 16
                ,],
            [
                "id" => 575,
                "name" => "Ben Aknoun",
                "city_id" => 16
                ,],
            [
                "id" => 576,
                "name" => "Dely Ibrahim",
                "city_id" => 16
                ,],
            [
                "id" => 577,
                "name" => "El Hammamet",
                "city_id" => 16
                ,],
            [
                "id" => 578,
                "name" => "Raïs Hamidou",
                "city_id" => 16
                ,],
            [
                "id" => 579,
                "name" => "Djasr Kasentina",
                "city_id" => 16
                ,],
            [
                "id" => 580,
                "name" => "El Mouradia",
                "city_id" => 16
                ,],
            [
                "id" => 581,
                "name" => "Hydra",
                "city_id" => 16
                ,],
            [
                "id" => 582,
                "name" => "Mohammadia",
                "city_id" => 16
                ,],
            [
                "id" => 583,
                "name" => "Bordj El Kiffan",
                "city_id" => 16
                ,],
            [
                "id" => 584,
                "name" => "El Magharia",
                "city_id" => 16
                ,],
            [
                "id" => 585,
                "name" => "Beni Messous",
                "city_id" => 16
                ,],
            [
                "id" => 586,
                "name" => "Les Eucalyptus",
                "city_id" => 16
                ,],
            [
                "id" => 587,
                "name" => "Birtouta",
                "city_id" => 16
                ,],
            [
                "id" => 588,
                "name" => "Tessala El Merdja",
                "city_id" => 16
                ,],
            [
                "id" => 589,
                "name" => "Ouled Chebel",
                "city_id" => 16
                ,],
            [
                "id" => 590,
                "name" => "Sidi Moussa",
                "city_id" => 16
                ,],
            [
                "id" => 591,
                "name" => "Aïn Taya",
                "city_id" => 16
                ,],
            [
                "id" => 592,
                "name" => "Bordj El Bahri",
                "city_id" => 16
                ,],
            [
                "id" => 593,
                "name" => "El Marsa",
                "city_id" => 16
                ,],
            [
                "id" => 594,
                "name" => "H'raoua",
                "city_id" => 16
                ,],
            [
                "id" => 595,
                "name" => "Rouïba",
                "city_id" => 16
                ,],
            [
                "id" => 596,
                "name" => "Reghaïa",
                "city_id" => 16
                ,],
            [
                "id" => 597,
                "name" => "Aïn Benian",
                "city_id" => 16
                ,],
            [
                "id" => 598,
                "name" => "Staoueli",
                "city_id" => 16
                ,],
            [
                "id" => 599,
                "name" => "Zeralda",
                "city_id" => 16
                ,],
            [
                "id" => 600,
                "name" => "Mahelma",
                "city_id" => 16
                ,],
            [
                "id" => 601,
                "name" => "Rahmania",
                "city_id" => 16
                ,],
            [
                "id" => 602,
                "name" => "Souidania",
                "city_id" => 16
                ,],
            [
                "id" => 603,
                "name" => "Cheraga",
                "city_id" => 16
                ,],
            [
                "id" => 604,
                "name" => "Ouled Fayet",
                "city_id" => 16
                ,],
            [
                "id" => 605,
                "name" => "El Achour",
                "city_id" => 16
                ,],
            [
                "id" => 606,
                "name" => "Draria",
                "city_id" => 16
                ,],
            [
                "id" => 607,
                "name" => "Douera",
                "city_id" => 16
                ,],
            [
                "id" => 608,
                "name" => "Baba Hassen",
                "city_id" => 16
                ,],
            [
                "id" => 609,
                "name" => "Khraicia",
                "city_id" => 16
                ,],
            [
                "id" => 610,
                "name" => "Saoula",
                "city_id" => 16
                ,],
            [
                "id" => 611,
                "name" => "Aïn Chouhada",
                "city_id" => 17
                ,],
            [
                "id" => 612,
                "name" => "Aïn El Ibel",
                "city_id" => 17
                ,],
            [
                "id" => 613,
                "name" => "Aïn Feka",
                "city_id" => 17
                ,],
            [
                "id" => 614,
                "name" => "Aïn Maabed",
                "city_id" => 17
                ,],
            [
                "id" => 615,
                "name" => "Aïn Oussara",
                "city_id" => 17
                ,],
            [
                "id" => 616,
                "name" => "Amourah",
                "city_id" => 17
                ,],
            [
                "id" => 617,
                "name" => "Benhar",
                "city_id" => 17
                ,],
            [
                "id" => 618,
                "name" => "Beni Yagoub",
                "city_id" => 17
                ,],
            [
                "id" => 619,
                "name" => "Birine",
                "city_id" => 17
                ,],
            [
                "id" => 620,
                "name" => "Bouira Lahdab",
                "city_id" => 17
                ,],
            [
                "id" => 621,
                "name" => "Charef",
                "city_id" => 17
                ,],
            [
                "id" => 622,
                "name" => "Dar Chioukh",
                "city_id" => 17
                ,],
            [
                "id" => 623,
                "name" => "Deldoul",
                "city_id" => 17
                ,],
            [
                "id" => 624,
                "name" => "Djelfa",
                "city_id" => 17
                ,],
            [
                "id" => 625,
                "name" => "Douis",
                "city_id" => 17
                ,],
            [
                "id" => 626,
                "name" => "El Guedid",
                "city_id" => 17
                ,],
            [
                "id" => 627,
                "name" => "El Idrissia",
                "city_id" => 17
                ,],
            [
                "id" => 628,
                "name" => "El Khemis",
                "city_id" => 17
                ,],
            [
                "id" => 629,
                "name" => "Faidh El Botma",
                "city_id" => 17
                ,],
            [
                "id" => 630,
                "name" => "Guernini",
                "city_id" => 17
                ,],
            [
                "id" => 631,
                "name" => "Guettara",
                "city_id" => 17
                ,],
            [
                "id" => 632,
                "name" => "Had-Sahary",
                "city_id" => 17
                ,],
            [
                "id" => 633,
                "name" => "Hassi Bahbah",
                "city_id" => 17
                ,],
            [
                "id" => 634,
                "name" => "Hassi El Euch",
                "city_id" => 17
                ,],
            [
                "id" => 635,
                "name" => "Hassi Fedoul",
                "city_id" => 17
                ,],
            [
                "id" => 636,
                "name" => "Messaad",
                "city_id" => 17
                ,],
            [
                "id" => 637,
                "name" => "M'Liliha",
                "city_id" => 17
                ,],
            [
                "id" => 638,
                "name" => "Moudjebara",
                "city_id" => 17
                ,],
            [
                "id" => 639,
                "name" => "Oum Laadham",
                "city_id" => 17
                ,],
            [
                "id" => 640,
                "name" => "Sed Rahal",
                "city_id" => 17
                ,],
            [
                "id" => 641,
                "name" => "Selmana",
                "city_id" => 17
                ,],
            [
                "id" => 642,
                "name" => "Sidi Baizid",
                "city_id" => 17
                ,],
            [
                "id" => 643,
                "name" => "Sidi Ladjel",
                "city_id" => 17
                ,],
            [
                "id" => 644,
                "name" => "Tadmit",
                "city_id" => 17
                ,],
            [
                "id" => 645,
                "name" => "Zaafrane",
                "city_id" => 17
                ,],
            [
                "id" => 646,
                "name" => "Zaccar",
                "city_id" => 17
                ,],
            [
                "id" => 647,
                "name" => "Jijel",
                "city_id" => 18
                ,],
            [
                "id" => 648,
                "name" => "Eraguene",
                "city_id" => 18
                ,],
            [
                "id" => 649,
                "name" => "El Aouana",
                "city_id" => 18
                ,],
            [
                "id" => 650,
                "name" => "Ziama Mansouriah",
                "city_id" => 18
                ,],
            [
                "id" => 651,
                "name" => "Taher",
                "city_id" => 18
                ,],
            [
                "id" => 652,
                "name" => "Emir Abdelkader",
                "city_id" => 18
                ,],
            [
                "id" => 653,
                "name" => "Chekfa",
                "city_id" => 18
                ,],
            [
                "id" => 654,
                "name" => "Chahna",
                "city_id" => 18
                ,],
            [
                "id" => 655,
                "name" => "El Milia",
                "city_id" => 18
                ,],
            [
                "id" => 656,
                "name" => "Sidi Maarouf",
                "city_id" => 18
                ,],
            [
                "id" => 657,
                "name" => "Settara",
                "city_id" => 18
                ,],
            [
                "id" => 658,
                "name" => "El Ancer",
                "city_id" => 18
                ,],
            [
                "id" => 659,
                "name" => "Sidi Abdelaziz",
                "city_id" => 18
                ,],
            [
                "id" => 660,
                "name" => "Kaous",
                "city_id" => 18
                ,],
            [
                "id" => 661,
                "name" => "Ghebala",
                "city_id" => 18
                ,],
            [
                "id" => 662,
                "name" => "Bouraoui Belhadef",
                "city_id" => 18
                ,],
            [
                "id" => 663,
                "name" => "Djimla",
                "city_id" => 18
                ,],
            [
                "id" => 664,
                "name" => "Selma Benziada",
                "city_id" => 18
                ,],
            [
                "id" => 665,
                "name" => "Boucif Ouled Askeur",
                "city_id" => 18
                ,],
            [
                "id" => 666,
                "name" => "El Kennar Nouchfi",
                "city_id" => 18
                ,],
            [
                "id" => 667,
                "name" => "Ouled Yahia Khedrouche",
                "city_id" => 18
                ,],
            [
                "id" => 668,
                "name" => "Boudriaa Ben Yadjis",
                "city_id" => 18
                ,],
            [
                "id" => 669,
                "name" => "Kheïri Oued Adjoul",
                "city_id" => 18
                ,],
            [
                "id" => 670,
                "name" => "Texenna",
                "city_id" => 18
                ,],
            [
                "id" => 671,
                "name" => "Djemaa Beni Habibi",
                "city_id" => 18
                ,],
            [
                "id" => 672,
                "name" => "Bordj Tahar",
                "city_id" => 18
                ,],
            [
                "id" => 673,
                "name" => "Ouled Rabah",
                "city_id" => 18
                ,],
            [
                "id" => 674,
                "name" => "Ouadjana",
                "city_id" => 18
                ,],
            [
                "id" => 675,
                "name" => "Aïn Abessa",
                "city_id" => 19
                ,],
            [
                "id" => 676,
                "name" => "Aïn Arnat",
                "city_id" => 19
                ,],
            [
                "id" => 677,
                "name" => "Aïn Azel",
                "city_id" => 19
                ,],
            [
                "id" => 678,
                "name" => "Aïn El Kebira",
                "city_id" => 19
                ,],
            [
                "id" => 679,
                "name" => "Aïn Lahdjar",
                "city_id" => 19
                ,],
            [
                "id" => 680,
                "name" => "Aïn Legradj",
                "city_id" => 19
                ,],
            [
                "id" => 681,
                "name" => "Aïn Oulmene",
                "city_id" => 19
                ,],
            [
                "id" => 682,
                "name" => "Aïn Roua",
                "city_id" => 19
                ,],
            [
                "id" => 683,
                "name" => "Aïn Sebt",
                "city_id" => 19
                ,],
            [
                "id" => 684,
                "name" => "Aït Naoual Mezada",
                "city_id" => 19
                ,],
            [
                "id" => 685,
                "name" => "Aït Tizi",
                "city_id" => 19
                ,],
            [
                "id" => 686,
                "name" => "Beni Ouartilene",
                "city_id" => 19
                ,],
            [
                "id" => 687,
                "name" => "Amoucha",
                "city_id" => 19
                ,],
            [
                "id" => 688,
                "name" => "Babor",
                "city_id" => 19
                ,],
            [
                "id" => 689,
                "name" => "Bazer Sakhra",
                "city_id" => 19
                ,],
            [
                "id" => 690,
                "name" => "Beidha Bordj",
                "city_id" => 19
                ,],
            [
                "id" => 691,
                "name" => "Belaa",
                "city_id" => 19
                ,],
            [
                "id" => 692,
                "name" => "Beni Aziz",
                "city_id" => 19
                ,],
            [
                "id" => 693,
                "name" => "Beni Chebana",
                "city_id" => 19
                ,],
            [
                "id" => 694,
                "name" => "Beni Fouda",
                "city_id" => 19
                ,],
            [
                "id" => 695,
                "name" => "Beni Hocine",
                "city_id" => 19
                ,],
            [
                "id" => 696,
                "name" => "Beni Mouhli",
                "city_id" => 19
                ,],
            [
                "id" => 697,
                "name" => "Bir El Arch",
                "city_id" => 19
                ,],
            [
                "id" => 698,
                "name" => "Bir Haddada",
                "city_id" => 19
                ,],
            [
                "id" => 699,
                "name" => "Bouandas",
                "city_id" => 19
                ,],
            [
                "id" => 700,
                "name" => "Bougaa",
                "city_id" => 19
                ,],
            [
                "id" => 701,
                "name" => "Bousselam",
                "city_id" => 19
                ,],
            [
                "id" => 702,
                "name" => "Boutaleb",
                "city_id" => 19
                ,],
            [
                "id" => 703,
                "name" => "Dehamcha",
                "city_id" => 19
                ,],
            [
                "id" => 704,
                "name" => "Djemila",
                "city_id" => 19
                ,],
            [
                "id" => 705,
                "name" => "Draa Kebila",
                "city_id" => 19
                ,],
            [
                "id" => 706,
                "name" => "El Eulma",
                "city_id" => 19
                ,],
            [
                "id" => 707,
                "name" => "El Ouldja",
                "city_id" => 19
                ,],
            [
                "id" => 708,
                "name" => "El Ouricia",
                "city_id" => 19
                ,],
            [
                "id" => 709,
                "name" => "Guellal",
                "city_id" => 19
                ,],
            [
                "id" => 710,
                "name" => "Guelta Zerka",
                "city_id" => 19
                ,],
            [
                "id" => 711,
                "name" => "Guenzet",
                "city_id" => 19
                ,],
            [
                "id" => 712,
                "name" => "Guidjel",
                "city_id" => 19
                ,],
            [
                "id" => 713,
                "name" => "Hamma",
                "city_id" => 19
                ,],
            [
                "id" => 714,
                "name" => "Hammam Guergour",
                "city_id" => 19
                ,],
            [
                "id" => 715,
                "name" => "Hammam Soukhna",
                "city_id" => 19
                ,],
            [
                "id" => 716,
                "name" => "Harbil",
                "city_id" => 19
                ,],
            [
                "id" => 717,
                "name" => "Ksar El Abtal",
                "city_id" => 19
                ,],
            [
                "id" => 718,
                "name" => "Maaouia",
                "city_id" => 19
                ,],
            [
                "id" => 719,
                "name" => "Maoklane",
                "city_id" => 19
                ,],
            [
                "id" => 720,
                "name" => "Mezloug",
                "city_id" => 19
                ,],
            [
                "id" => 721,
                "name" => "Oued El Barad",
                "city_id" => 19
                ,],
            [
                "id" => 722,
                "name" => "Ouled Addouane",
                "city_id" => 19
                ,],
            [
                "id" => 723,
                "name" => "Ouled Sabor",
                "city_id" => 19
                ,],
            [
                "id" => 724,
                "name" => "Ouled Si Ahmed",
                "city_id" => 19
                ,],
            [
                "id" => 725,
                "name" => "Ouled Tebben",
                "city_id" => 19
                ,],
            [
                "id" => 726,
                "name" => "Rasfa",
                "city_id" => 19
                ,],
            [
                "id" => 727,
                "name" => "Salah Bey",
                "city_id" => 19
                ,],
            [
                "id" => 728,
                "name" => "Serdj El Ghoul",
                "city_id" => 19
                ,],
            [
                "id" => 729,
                "name" => "Sétif",
                "city_id" => 19
                ,],
            [
                "id" => 730,
                "name" => "Tachouda",
                "city_id" => 19
                ,],
            [
                "id" => 731,
                "name" => "Talaifacene",
                "city_id" => 19
                ,],
            [
                "id" => 732,
                "name" => "Taya",
                "city_id" => 19
                ,],
            [
                "id" => 733,
                "name" => "Tella",
                "city_id" => 19
                ,],
            [
                "id" => 734,
                "name" => "Tizi N'Bechar",
                "city_id" => 19
                ,],
            [
                "id" => 735,
                "name" => "Aïn El Hadjar",
                "city_id" => 20
                ,],
            [
                "id" => 736,
                "name" => "Aïn Sekhouna",
                "city_id" => 20
                ,],
            [
                "id" => 737,
                "name" => "Aïn Soltane",
                "city_id" => 20
                ,],
            [
                "id" => 738,
                "name" => "Doui Thabet",
                "city_id" => 20
                ,],
            [
                "id" => 739,
                "name" => "El Hassasna",
                "city_id" => 20
                ,],
            [
                "id" => 740,
                "name" => "Hounet",
                "city_id" => 20
                ,],
            [
                "id" => 741,
                "name" => "Maamora",
                "city_id" => 20
                ,],
            [
                "id" => 742,
                "name" => "Moulay Larbi",
                "city_id" => 20
                ,],
            [
                "id" => 743,
                "name" => "Ouled Brahim",
                "city_id" => 20
                ,],
            [
                "id" => 744,
                "name" => "Ouled Khaled",
                "city_id" => 20
                ,],
            [
                "id" => 745,
                "name" => "Saïda",
                "city_id" => 20
                ,],
            [
                "id" => 746,
                "name" => "Sidi Ahmed",
                "city_id" => 20
                ,],
            [
                "id" => 747,
                "name" => "Sidi Amar",
                "city_id" => 20
                ,],
            [
                "id" => 748,
                "name" => "Sidi Boubekeur",
                "city_id" => 20
                ,],
            [
                "id" => 749,
                "name" => "Tircine",
                "city_id" => 20
                ,],
            [
                "id" => 750,
                "name" => "Youb",
                "city_id" => 20
                ,],
            [
                "id" => 751,
                "name" => "Aïn Bouziane",
                "city_id" => 21
                ,],
            [
                "id" => 752,
                "name" => "Aïn Charchar",
                "city_id" => 21
                ,],
            [
                "id" => 753,
                "name" => "Aïn Kechra",
                "city_id" => 21
                ,],
            [
                "id" => 754,
                "name" => "Aïn Zouit",
                "city_id" => 21
                ,],
            [
                "id" => 755,
                "name" => "Azzaba",
                "city_id" => 21
                ,],
            [
                "id" => 756,
                "name" => "Bekkouche Lakhdar",
                "city_id" => 21
                ,],
            [
                "id" => 757,
                "name" => "Bin El Ouiden",
                "city_id" => 21
                ,],
            [
                "id" => 758,
                "name" => "Ben Azzouz",
                "city_id" => 21
                ,],
            [
                "id" => 759,
                "name" => "Beni Bechir",
                "city_id" => 21
                ,],
            [
                "id" => 760,
                "name" => "Beni Oulbane",
                "city_id" => 21
                ,],
            [
                "id" => 761,
                "name" => "Beni Zid",
                "city_id" => 21
                ,],
            [
                "id" => 762,
                "name" => "Bouchtata",
                "city_id" => 21
                ,],
            [
                "id" => 763,
                "name" => "Cheraia",
                "city_id" => 21
                ,],
            [
                "id" => 764,
                "name" => "Collo",
                "city_id" => 21
                ,],
            [
                "id" => 765,
                "name" => "Djendel Saadi Mohamed",
                "city_id" => 21
                ,],
            [
                "id" => 766,
                "name" => "El Ghedir",
                "city_id" => 21
                ,],
            [
                "id" => 767,
                "name" => "El Hadaiek",
                "city_id" => 21
                ,],
            [
                "id" => 768,
                "name" => "El Harrouch",
                "city_id" => 21
                ,],
            [
                "id" => 769,
                "name" => "El Marsa",
                "city_id" => 21
                ,],
            [
                "id" => 770,
                "name" => "Emdjez Edchich",
                "city_id" => 21
                ,],
            [
                "id" => 771,
                "name" => "Es Sebt",
                "city_id" => 21
                ,],
            [
                "id" => 772,
                "name" => "Filfila",
                "city_id" => 21
                ,],
            [
                "id" => 773,
                "name" => "Hamadi Krouma",
                "city_id" => 21
                ,],
            [
                "id" => 774,
                "name" => "Kanoua",
                "city_id" => 21
                ,],
            [
                "id" => 775,
                "name" => "Kerkera",
                "city_id" => 21
                ,],
            [
                "id" => 776,
                "name" => "Kheneg Mayoum",
                "city_id" => 21
                ,],
            [
                "id" => 777,
                "name" => "Oued Zehour",
                "city_id" => 21
                ,],
            [
                "id" => 778,
                "name" => "Ouldja Boulballout",
                "city_id" => 21
                ,],
            [
                "id" => 779,
                "name" => "Ouled Attia",
                "city_id" => 21
                ,],
            [
                "id" => 780,
                "name" => "Ouled Hbaba",
                "city_id" => 21
                ,],
            [
                "id" => 781,
                "name" => "Oum Toub",
                "city_id" => 21
                ,],
            [
                "id" => 782,
                "name" => "Ramdane Djamel",
                "city_id" => 21
                ,],
            [
                "id" => 783,
                "name" => "Salah Bouchaour",
                "city_id" => 21
                ,],
            [
                "id" => 784,
                "name" => "Sidi Mezghiche",
                "city_id" => 21
                ,],
            [
                "id" => 785,
                "name" => "Skikda",
                "city_id" => 21
                ,],
            [
                "id" => 786,
                "name" => "Tamalous",
                "city_id" => 21
                ,],
            [
                "id" => 787,
                "name" => "Zerdaza",
                "city_id" => 21
                ,],
            [
                "id" => 788,
                "name" => "Zitouna",
                "city_id" => 21
                ,],
            [
                "id" => 789,
                "name" => "Aïn Adden",
                "city_id" => 22
                ,],
            [
                "id" => 790,
                "name" => "Aïn El Berd",
                "city_id" => 22
                ,],
            [
                "id" => 791,
                "name" => "Aïn Kada",
                "city_id" => 22
                ,],
            [
                "id" => 792,
                "name" => "Aïn Thrid",
                "city_id" => 22
                ,],
            [
                "id" => 793,
                "name" => "Aïn Tindamine",
                "city_id" => 22
                ,],
            [
                "id" => 794,
                "name" => "Amarnas",
                "city_id" => 22
                ,],
            [
                "id" => 795,
                "name" => "Badredine El Mokrani",
                "city_id" => 22
                ,],
            [
                "id" => 796,
                "name" => "Belarbi",
                "city_id" => 22
                ,],
            [
                "id" => 797,
                "name" => "Ben Badis",
                "city_id" => 22
                ,],
            [
                "id" => 798,
                "name" => "Benachiba Chelia",
                "city_id" => 22
                ,],
            [
                "id" => 799,
                "name" => "Bir El Hammam",
                "city_id" => 22
                ,],
            [
                "id" => 800,
                "name" => "Boudjebaa El Bordj",
                "city_id" => 22
                ,],
            [
                "id" => 801,
                "name" => "Boukhanafis",
                "city_id" => 22
                ,],
            [
                "id" => 802,
                "name" => "Chettouane Belaila",
                "city_id" => 22
                ,],
            [
                "id" => 803,
                "name" => "Dhaya",
                "city_id" => 22
                ,],
            [
                "id" => 804,
                "name" => "El Haçaiba",
                "city_id" => 22
                ,],
            [
                "id" => 805,
                "name" => "Hassi Dahou",
                "city_id" => 22
                ,],
            [
                "id" => 806,
                "name" => "Hassi Zehana",
                "city_id" => 22
                ,],
            [
                "id" => 807,
                "name" => "Lamtar",
                "city_id" => 22
                ,],
            [
                "id" => 808,
                "name" => "Makedra",
                "city_id" => 22
                ,],
            [
                "id" => 809,
                "name" => "Marhoum",
                "city_id" => 22
                ,],
            [
                "id" => 810,
                "name" => "M'Cid",
                "city_id" => 22
                ,],
            [
                "id" => 811,
                "name" => "Merine",
                "city_id" => 22
                ,],
            [
                "id" => 812,
                "name" => "Mezaourou",
                "city_id" => 22
                ,],
            [
                "id" => 813,
                "name" => "Mostefa Ben Brahim",
                "city_id" => 22
                ,],
            [
                "id" => 814,
                "name" => "Moulay Slissen",
                "city_id" => 22
                ,],
            [
                "id" => 815,
                "name" => "Oued Sebaa",
                "city_id" => 22
                ,],
            [
                "id" => 816,
                "name" => "Oued Sefioun",
                "city_id" => 22
                ,],
            [
                "id" => 817,
                "name" => "Oued Taourira",
                "city_id" => 22
                ,],
            [
                "id" => 818,
                "name" => "Ras El Ma",
                "city_id" => 22
                ,],
            [
                "id" => 819,
                "name" => "Redjem Demouche",
                "city_id" => 22
                ,],
            [
                "id" => 820,
                "name" => "Sehala Thaoura",
                "city_id" => 22
                ,],
            [
                "id" => 821,
                "name" => "Sfisef",
                "city_id" => 22
                ,],
            [
                "id" => 822,
                "name" => "Sidi Ali Benyoub",
                "city_id" => 22
                ,],
            [
                "id" => 823,
                "name" => "Sidi Ali Boussidi",
                "city_id" => 22
                ,],
            [
                "id" => 824,
                "name" => "Sidi Bel Abbes",
                "city_id" => 22
                ,],
            [
                "id" => 825,
                "name" => "Sidi Brahim",
                "city_id" => 22
                ,],
            [
                "id" => 826,
                "name" => "Sidi Chaib",
                "city_id" => 22
                ,],
            [
                "id" => 827,
                "name" => "Sidi Daho des Zairs",
                "city_id" => 22
                ,],
            [
                "id" => 828,
                "name" => "Sidi Hamadouche",
                "city_id" => 22
                ,],
            [
                "id" => 829,
                "name" => "Sidi Khaled",
                "city_id" => 22
                ,],
            [
                "id" => 830,
                "name" => "Sidi Lahcene",
                "city_id" => 22
                ,],
            [
                "id" => 831,
                "name" => "Sidi Yacoub",
                "city_id" => 22
                ,],
            [
                "id" => 832,
                "name" => "Tabia",
                "city_id" => 22
                ,],
            [
                "id" => 833,
                "name" => "Tafissour",
                "city_id" => 22
                ,],
            [
                "id" => 834,
                "name" => "Taoudmout",
                "city_id" => 22
                ,],
            [
                "id" => 835,
                "name" => "Teghalimet",
                "city_id" => 22
                ,],
            [
                "id" => 836,
                "name" => "Telagh",
                "city_id" => 22
                ,],
            [
                "id" => 837,
                "name" => "Tenira",
                "city_id" => 22
                ,],
            [
                "id" => 838,
                "name" => "Tessala",
                "city_id" => 22
                ,],
            [
                "id" => 839,
                "name" => "Tilmouni",
                "city_id" => 22
                ,],
            [
                "id" => 840,
                "name" => "Zerouala",
                "city_id" => 22
                ,],
            [
                "id" => 841,
                "name" => "Annaba",
                "city_id" => 23
                ,],
            [
                "id" => 842,
                "name" => "Berrahal",
                "city_id" => 23
                ,],
            [
                "id" => 843,
                "name" => "El Hadjar",
                "city_id" => 23
                ,],
            [
                "id" => 844,
                "name" => "Eulma",
                "city_id" => 23
                ,],
            [
                "id" => 845,
                "name" => "El Bouni",
                "city_id" => 23
                ,],
            [
                "id" => 846,
                "name" => "Oued El Aneb",
                "city_id" => 23
                ,],
            [
                "id" => 847,
                "name" => "Cheurfa",
                "city_id" => 23
                ,],
            [
                "id" => 848,
                "name" => "Seraïdi",
                "city_id" => 23
                ,],
            [
                "id" => 849,
                "name" => "Aïn Berda",
                "city_id" => 23
                ,],
            [
                "id" => 850,
                "name" => "Chetaïbi",
                "city_id" => 23
                ,],
            [
                "id" => 851,
                "name" => "Sidi Amar",
                "city_id" => 23
                ,],
            [
                "id" => 852,
                "name" => "Treat",
                "city_id" => 23
                ,],
            [
                "id" => 853,
                "name" => "Aïn Ben Beida",
                "city_id" => 24
                ,],
            [
                "id" => 854,
                "name" => "Aïn Larbi",
                "city_id" => 24
                ,],
            [
                "id" => 855,
                "name" => "Aïn Makhlouf",
                "city_id" => 24
                ,],
            [
                "id" => 856,
                "name" => "Aïn Reggada",
                "city_id" => 24
                ,],
            [
                "id" => 857,
                "name" => "Aïn Sandel",
                "city_id" => 24
                ,],
            [
                "id" => 858,
                "name" => "Belkheir",
                "city_id" => 24
                ,],
            [
                "id" => 859,
                "name" => "Ben Djerrah",
                "city_id" => 24
                ,],
            [
                "id" => 860,
                "name" => "Beni Mezline",
                "city_id" => 24
                ,],
            [
                "id" => 861,
                "name" => "Bordj Sabath",
                "city_id" => 24
                ,],
            [
                "id" => 862,
                "name" => "Bouhachana",
                "city_id" => 24
                ,],
            [
                "id" => 863,
                "name" => "Bouhamdane",
                "city_id" => 24
                ,],
            [
                "id" => 864,
                "name" => "Bouati Mahmoud",
                "city_id" => 24
                ,],
            [
                "id" => 865,
                "name" => "Bouchegouf",
                "city_id" => 24
                ,],
            [
                "id" => 866,
                "name" => "Boumahra Ahmed",
                "city_id" => 24
                ,],
            [
                "id" => 867,
                "name" => "Dahouara",
                "city_id" => 24
                ,],
            [
                "id" => 868,
                "name" => "Djeballah Khemissi",
                "city_id" => 24
                ,],
            [
                "id" => 869,
                "name" => "El Fedjoudj",
                "city_id" => 24
                ,],
            [
                "id" => 870,
                "name" => "Guellat Bou Sbaa",
                "city_id" => 24
                ,],
            [
                "id" => 871,
                "name" => "Guelma",
                "city_id" => 24
                ,],
            [
                "id" => 872,
                "name" => "Hammam Debagh",
                "city_id" => 24
                ,],
            [
                "id" => 873,
                "name" => "Hammam N'Bail",
                "city_id" => 24
                ,],
            [
                "id" => 874,
                "name" => "Héliopolis",
                "city_id" => 24
                ,],
            [
                "id" => 875,
                "name" => "Houari Boumédiène",
                "city_id" => 24
                ,],
            [
                "id" => 876,
                "name" => "Khezarra",
                "city_id" => 24
                ,],
            [
                "id" => 877,
                "name" => "Medjez Amar",
                "city_id" => 24
                ,],
            [
                "id" => 878,
                "name" => "Medjez Sfa",
                "city_id" => 24
                ,],
            [
                "id" => 879,
                "name" => "Nechmaya",
                "city_id" => 24
                ,],
            [
                "id" => 880,
                "name" => "Oued Cheham",
                "city_id" => 24
                ,],
            [
                "id" => 881,
                "name" => "Oued Fragha",
                "city_id" => 24
                ,],
            [
                "id" => 882,
                "name" => "Oued Zenati",
                "city_id" => 24
                ,],
            [
                "id" => 883,
                "name" => "Ras El Agba",
                "city_id" => 24
                ,],
            [
                "id" => 884,
                "name" => "Roknia",
                "city_id" => 24
                ,],
            [
                "id" => 885,
                "name" => "Sellaoua Announa",
                "city_id" => 24
                ,],
            [
                "id" => 886,
                "name" => "Tamlouka",
                "city_id" => 24
                ,],
            [
                "id" => 887,
                "name" => "Aïn Abid",
                "city_id" => 25
                ,],
            [
                "id" => 888,
                "name" => "Aïn Smara",
                "city_id" => 25
                ,],
            [
                "id" => 889,
                "name" => "Beni Hamiden",
                "city_id" => 25
                ,],
            [
                "id" => 890,
                "name" => "Constantine",
                "city_id" => 25
                ,],
            [
                "id" => 891,
                "name" => "Didouche Mourad",
                "city_id" => 25
                ,],
            [
                "id" => 892,
                "name" => "El Khroub",
                "city_id" => 25
                ,],
            [
                "id" => 893,
                "name" => "Hamma Bouziane",
                "city_id" => 25
                ,],
            [
                "id" => 894,
                "name" => "Ibn Badis",
                "city_id" => 25
                ,],
            [
                "id" => 895,
                "name" => "Ibn Ziad",
                "city_id" => 25
                ,],
            [
                "id" => 896,
                "name" => "Messaoud Boudjriou",
                "city_id" => 25
                ,],
            [
                "id" => 897,
                "name" => "Ouled Rahmoune",
                "city_id" => 25
                ,],
            [
                "id" => 898,
                "name" => "Zighoud Youcef",
                "city_id" => 25
                ,],
            [
                "id" => 899,
                "name" => "Aïn Boucif",
                "city_id" => 26
                ,],
            [
                "id" => 900,
                "name" => "Aïn Ouksir",
                "city_id" => 26
                ,],
            [
                "id" => 901,
                "name" => "Aissaouia",
                "city_id" => 26
                ,],
            [
                "id" => 902,
                "name" => "Aziz",
                "city_id" => 26
                ,],
            [
                "id" => 903,
                "name" => "Baata",
                "city_id" => 26
                ,],
            [
                "id" => 904,
                "name" => "Benchicao",
                "city_id" => 26
                ,],
            [
                "id" => 905,
                "name" => "Beni Slimane",
                "city_id" => 26
                ,],
            [
                "id" => 906,
                "name" => "Berrouaghia",
                "city_id" => 26
                ,],
            [
                "id" => 907,
                "name" => "Bir Ben Laabed",
                "city_id" => 26
                ,],
            [
                "id" => 908,
                "name" => "Boghar",
                "city_id" => 26
                ,],
            [
                "id" => 909,
                "name" => "Bou Aiche",
                "city_id" => 26
                ,],
            [
                "id" => 910,
                "name" => "Bouaichoune",
                "city_id" => 26
                ,],
            [
                "id" => 911,
                "name" => "Bouchrahil",
                "city_id" => 26
                ,],
            [
                "id" => 912,
                "name" => "Boughezoul",
                "city_id" => 26
                ,],
            [
                "id" => 913,
                "name" => "Bouskene",
                "city_id" => 26
                ,],
            [
                "id" => 914,
                "name" => "Chahbounia",
                "city_id" => 26
                ,],
            [
                "id" => 915,
                "name" => "Chellalet El Adhaoura",
                "city_id" => 26
                ,],
            [
                "id" => 916,
                "name" => "Cheniguel",
                "city_id" => 26
                ,],
            [
                "id" => 917,
                "name" => "Derrag",
                "city_id" => 26
                ,],
            [
                "id" => 918,
                "name" => "Deux Bassins",
                "city_id" => 26
                ,],
            [
                "id" => 919,
                "name" => "Djouab",
                "city_id" => 26
                ,],
            [
                "id" => 920,
                "name" => "Draa Essamar",
                "city_id" => 26
                ,],
            [
                "id" => 921,
                "name" => "El Azizia",
                "city_id" => 26
                ,],
            [
                "id" => 922,
                "name" => "El Guelb El Kebir",
                "city_id" => 26
                ,],
            [
                "id" => 923,
                "name" => "El Hamdania",
                "city_id" => 26
                ,],
            [
                "id" => 924,
                "name" => "El Omaria",
                "city_id" => 26
                ,],
            [
                "id" => 925,
                "name" => "El Ouinet",
                "city_id" => 26
                ,],
            [
                "id" => 926,
                "name" => "Hannacha",
                "city_id" => 26
                ,],
            [
                "id" => 927,
                "name" => "Kef Lakhdar",
                "city_id" => 26
                ,],
            [
                "id" => 928,
                "name" => "Khams Djouamaa",
                "city_id" => 26
                ,],
            [
                "id" => 929,
                "name" => "Ksar Boukhari",
                "city_id" => 26
                ,],
            [
                "id" => 930,
                "name" => "Meghraoua",
                "city_id" => 26
                ,],
            [
                "id" => 931,
                "name" => "Médéa",
                "city_id" => 26
                ,],
            [
                "id" => 932,
                "name" => "Moudjbar",
                "city_id" => 26
                ,],
            [
                "id" => 933,
                "name" => "Meftaha",
                "city_id" => 26
                ,],
            [
                "id" => 934,
                "name" => "Mezerana",
                "city_id" => 26
                ,],
            [
                "id" => 935,
                "name" => "Mihoub",
                "city_id" => 26
                ,],
            [
                "id" => 936,
                "name" => "Ouamri",
                "city_id" => 26
                ,],
            [
                "id" => 937,
                "name" => "Oued Harbil",
                "city_id" => 26
                ,],
            [
                "id" => 938,
                "name" => "Ouled Antar",
                "city_id" => 26
                ,],
            [
                "id" => 939,
                "name" => "Ouled Bouachra",
                "city_id" => 26
                ,],
            [
                "id" => 940,
                "name" => "Ouled Brahim",
                "city_id" => 26
                ,],
            [
                "id" => 941,
                "name" => "Ouled Deide",
                "city_id" => 26
                ,],
            [
                "id" => 942,
                "name" => "Ouled Hellal",
                "city_id" => 26
                ,],
            [
                "id" => 943,
                "name" => "Ouled Maaref",
                "city_id" => 26
                ,],
            [
                "id" => 944,
                "name" => "Oum El Djalil",
                "city_id" => 26
                ,],
            [
                "id" => 945,
                "name" => "Ouzera",
                "city_id" => 26
                ,],
            [
                "id" => 946,
                "name" => "Rebaia",
                "city_id" => 26
                ,],
            [
                "id" => 947,
                "name" => "Saneg",
                "city_id" => 26
                ,],
            [
                "id" => 948,
                "name" => "Sedraia",
                "city_id" => 26
                ,],
            [
                "id" => 949,
                "name" => "Seghouane",
                "city_id" => 26
                ,],
            [
                "id" => 950,
                "name" => "Si Mahdjoub",
                "city_id" => 26
                ,],
            [
                "id" => 951,
                "name" => "Sidi Damed",
                "city_id" => 26
                ,],
            [
                "id" => 952,
                "name" => "Sidi Errabia",
                "city_id" => 26
                ,],
            [
                "id" => 953,
                "name" => "Sidi Naamane",
                "city_id" => 26
                ,],
            [
                "id" => 954,
                "name" => "Sidi Zahar",
                "city_id" => 26
                ,],
            [
                "id" => 955,
                "name" => "Sidi Ziane",
                "city_id" => 26
                ,],
            [
                "id" => 956,
                "name" => "Souagui",
                "city_id" => 26
                ,],
            [
                "id" => 957,
                "name" => "Tablat",
                "city_id" => 26
                ,],
            [
                "id" => 958,
                "name" => "Tafraout",
                "city_id" => 26
                ,],
            [
                "id" => 959,
                "name" => "Tamesguida",
                "city_id" => 26
                ,],
            [
                "id" => 960,
                "name" => "Tizi Mahdi",
                "city_id" => 26
                ,],
            [
                "id" => 961,
                "name" => "Tlatet Eddouar",
                "city_id" => 26
                ,],
            [
                "id" => 962,
                "name" => "Zoubiria",
                "city_id" => 26
                ,],
            [
                "id" => 963,
                "name" => "Abdelmalek Ramdane",
                "city_id" => 27
                ,],
            [
                "id" => 964,
                "name" => "Achaacha",
                "city_id" => 27
                ,],
            [
                "id" => 965,
                "name" => "Aïn Boudinar",
                "city_id" => 27
                ,],
            [
                "id" => 966,
                "name" => "Aïn Nouissy",
                "city_id" => 27
                ,],
            [
                "id" => 967,
                "name" => "Aïn Sidi Cherif",
                "city_id" => 27
                ,],
            [
                "id" => 968,
                "name" => "Aïn Tedles",
                "city_id" => 27
                ,],
            [
                "id" => 969,
                "name" => "Blad Touahria",
                "city_id" => 27
                ,],
            [
                "id" => 970,
                "name" => "Bouguirat",
                "city_id" => 27
                ,],
            [
                "id" => 971,
                "name" => "El Hassiane",
                "city_id" => 27
                ,],
            [
                "id" => 972,
                "name" => "Fornaka",
                "city_id" => 27
                ,],
            [
                "id" => 973,
                "name" => "Hadjadj",
                "city_id" => 27
                ,],
            [
                "id" => 974,
                "name" => "Hassi Mameche",
                "city_id" => 27
                ,],
            [
                "id" => 975,
                "name" => "Khadra",
                "city_id" => 27
                ,],
            [
                "id" => 976,
                "name" => "Kheireddine",
                "city_id" => 27
                ,],
            [
                "id" => 977,
                "name" => "Mansourah",
                "city_id" => 27
                ,],
            [
                "id" => 978,
                "name" => "Mesra",
                "city_id" => 27
                ,],
            [
                "id" => 979,
                "name" => "Mazagran",
                "city_id" => 27
                ,],
            [
                "id" => 980,
                "name" => "Mostaganem",
                "city_id" => 27
                ,],
            [
                "id" => 981,
                "name" => "Nekmaria",
                "city_id" => 27
                ,],
            [
                "id" => 982,
                "name" => "Oued El Kheir",
                "city_id" => 27
                ,],
            [
                "id" => 983,
                "name" => "Ouled Boughalem",
                "city_id" => 27
                ,],
            [
                "id" => 984,
                "name" => "Ouled Maallah",
                "city_id" => 27
                ,],
            [
                "id" => 985,
                "name" => "Safsaf",
                "city_id" => 27
                ,],
            [
                "id" => 986,
                "name" => "Sayada",
                "city_id" => 27
                ,],
            [
                "id" => 987,
                "name" => "Sidi Ali",
                "city_id" => 27
                ,],
            [
                "id" => 988,
                "name" => "Sidi Belattar",
                "city_id" => 27
                ,],
            [
                "id" => 989,
                "name" => "Sidi Lakhdar",
                "city_id" => 27
                ,],
            [
                "id" => 990,
                "name" => "Sirat",
                "city_id" => 27
                ,],
            [
                "id" => 991,
                "name" => "Souaflia",
                "city_id" => 27
                ,],
            [
                "id" => 992,
                "name" => "Sour",
                "city_id" => 27
                ,],
            [
                "id" => 993,
                "name" => "Stidia",
                "city_id" => 27
                ,],
            [
                "id" => 994,
                "name" => "Tazgait",
                "city_id" => 27
                ,],
            [
                "id" => 995,
                "name" => "Aïn El Hadjel",
                "city_id" => 28
                ,],
            [
                "id" => 996,
                "name" => "Aïn El Melh",
                "city_id" => 28
                ,],
            [
                "id" => 997,
                "name" => "Aïn Errich",
                "city_id" => 28
                ,],
            [
                "id" => 998,
                "name" => "Aïn Fares",
                "city_id" => 28
                ,],
            [
                "id" => 999,
                "name" => "Aïn Khadra",
                "city_id" => 28
                ,],
            [
                "id" => 1000,
                "name" => "Belaiba",
                "city_id" => 28
                ,],
            [
                "id" => 1001,
                "name" => "Ben Srour",
                "city_id" => 28
                ,],
            [
                "id" => 1002,
                "name" => "Beni Ilmane",
                "city_id" => 28
                ,],
            [
                "id" => 1003,
                "name" => "Benzouh",
                "city_id" => 28
                ,],
            [
                "id" => 1004,
                "name" => "Berhoum",
                "city_id" => 28
                ,],
            [
                "id" => 1005,
                "name" => "Bir Foda",
                "city_id" => 28
                ,],
            [
                "id" => 1006,
                "name" => "Bou Saâda",
                "city_id" => 28
                ,],
            [
                "id" => 1007,
                "name" => "Bouti Sayah",
                "city_id" => 28
                ,],
            [
                "id" => 1008,
                "name" => "Chellal",
                "city_id" => 28
                ,],
            [
                "id" => 1009,
                "name" => "Dehahna",
                "city_id" => 28
                ,],
            [
                "id" => 1010,
                "name" => "Djebel Messaad",
                "city_id" => 28
                ,],
            [
                "id" => 1011,
                "name" => "El Hamel",
                "city_id" => 28
                ,],
            [
                "id" => 1012,
                "name" => "El Houamed",
                "city_id" => 28
                ,],
            [
                "id" => 1013,
                "name" => "Hammam Dhalaa",
                "city_id" => 28
                ,],
            [
                "id" => 1014,
                "name" => "Khettouti Sed El Djir",
                "city_id" => 28
                ,],
            [
                "id" => 1015,
                "name" => "Khoubana",
                "city_id" => 28
                ,],
            [
                "id" => 1016,
                "name" => "Maadid",
                "city_id" => 28
                ,],
            [
                "id" => 1017,
                "name" => "Maarif",
                "city_id" => 28
                ,],
            [
                "id" => 1018,
                "name" => "Magra",
                "city_id" => 28
                ,],
            [
                "id" => 1019,
                "name" => "M'Cif",
                "city_id" => 28
                ,],
            [
                "id" => 1020,
                "name" => "Medjedel",
                "city_id" => 28
                ,],
            [
                "id" => 1021,
                "name" => "Mohammed Boudiaf",
                "city_id" => 28
                ,],
            [
                "id" => 1022,
                "name" => "M'Sila",
                "city_id" => 28
                ,],
            [
                "id" => 1023,
                "name" => "M'Tarfa",
                "city_id" => 28
                ,],
            [
                "id" => 1024,
                "name" => "Ouanougha",
                "city_id" => 28
                ,],
            [
                "id" => 1025,
                "name" => "Ouled Addi Guebala",
                "city_id" => 28
                ,],
            [
                "id" => 1026,
                "name" => "Ouled Atia",
                "city_id" => 28
                ,],
            [
                "id" => 1027,
                "name" => "Ouled Derradj",
                "city_id" => 28
                ,],
            [
                "id" => 1028,
                "name" => "Ouled Madhi",
                "city_id" => 28
                ,],
            [
                "id" => 1029,
                "name" => "Ouled Mansour",
                "city_id" => 28
                ,],
            [
                "id" => 1030,
                "name" => "Ouled Sidi Brahim",
                "city_id" => 28
                ,],
            [
                "id" => 1031,
                "name" => "Ouled Slimane",
                "city_id" => 28
                ,],
            [
                "id" => 1032,
                "name" => "Oultem",
                "city_id" => 28
                ,],
            [
                "id" => 1033,
                "name" => "Sidi Aïssa",
                "city_id" => 28
                ,],
            [
                "id" => 1034,
                "name" => "Sidi Ameur",
                "city_id" => 28
                ,],
            [
                "id" => 1035,
                "name" => "Sidi Hadjeres",
                "city_id" => 28
                ,],
            [
                "id" => 1036,
                "name" => "Sidi M'Hamed",
                "city_id" => 28
                ,],
            [
                "id" => 1037,
                "name" => "Slim",
                "city_id" => 28
                ,],
            [
                "id" => 1038,
                "name" => "Souamaa",
                "city_id" => 28
                ,],
            [
                "id" => 1039,
                "name" => "Tamsa",
                "city_id" => 28
                ,],
            [
                "id" => 1040,
                "name" => "Tarmount",
                "city_id" => 28
                ,],
            [
                "id" => 1041,
                "name" => "Zarzour",
                "city_id" => 28
                ,],
            [
                "id" => 1042,
                "name" => "Aïn Fares",
                "city_id" => 29
                ,],
            [
                "id" => 1043,
                "name" => "Aïn Fekan",
                "city_id" => 29
                ,],
            [
                "id" => 1044,
                "name" => "Aïn Ferah",
                "city_id" => 29
                ,],
            [
                "id" => 1045,
                "name" => "Aïn Fras",
                "city_id" => 29
                ,],
            [
                "id" => 1046,
                "name" => "Alaïmia",
                "city_id" => 29
                ,],
            [
                "id" => 1047,
                "name" => "Aouf",
                "city_id" => 29
                ,],
            [
                "id" => 1048,
                "name" => "Beniane",
                "city_id" => 29
                ,],
            [
                "id" => 1049,
                "name" => "Bou Hanifia",
                "city_id" => 29
                ,],
            [
                "id" => 1050,
                "name" => "Bou Henni",
                "city_id" => 29
                ,],
            [
                "id" => 1051,
                "name" => "Chorfa",
                "city_id" => 29
                ,],
            [
                "id" => 1052,
                "name" => "El Bordj",
                "city_id" => 29
                ,],
            [
                "id" => 1053,
                "name" => "El Gaada",
                "city_id" => 29
                ,],
            [
                "id" => 1054,
                "name" => "El Ghomri",
                "city_id" => 29
                ,],
            [
                "id" => 1055,
                "name" => "El Guettana",
                "city_id" => 29
                ,],
            [
                "id" => 1056,
                "name" => "El Keurt",
                "city_id" => 29
                ,],
            [
                "id" => 1057,
                "name" => "El Menaouer",
                "city_id" => 29
                ,],
            [
                "id" => 1058,
                "name" => "Ferraguig",
                "city_id" => 29
                ,],
            [
                "id" => 1059,
                "name" => "Froha",
                "city_id" => 29
                ,],
            [
                "id" => 1060,
                "name" => "Gharrous",
                "city_id" => 29
                ,],
            [
                "id" => 1061,
                "name" => "Guerdjoum",
                "city_id" => 29
                ,],
            [
                "id" => 1062,
                "name" => "Ghriss",
                "city_id" => 29
                ,],
            [
                "id" => 1063,
                "name" => "Hachem",
                "city_id" => 29
                ,],
            [
                "id" => 1064,
                "name" => "Hacine",
                "city_id" => 29
                ,],
            [
                "id" => 1065,
                "name" => "Khalouia",
                "city_id" => 29
                ,],
            [
                "id" => 1066,
                "name" => "Makdha",
                "city_id" => 29
                ,],
            [
                "id" => 1067,
                "name" => "Mamounia",
                "city_id" => 29
                ,],
            [
                "id" => 1068,
                "name" => "Maoussa",
                "city_id" => 29
                ,],
            [
                "id" => 1069,
                "name" => "Mascara",
                "city_id" => 29
                ,],
            [
                "id" => 1070,
                "name" => "Matemore",
                "city_id" => 29
                ,],
            [
                "id" => 1071,
                "name" => "Mocta Douz",
                "city_id" => 29
                ,],
            [
                "id" => 1072,
                "name" => "Mohammadia",
                "city_id" => 29
                ,],
            [
                "id" => 1073,
                "name" => "Nesmoth",
                "city_id" => 29
                ,],
            [
                "id" => 1074,
                "name" => "Oggaz",
                "city_id" => 29
                ,],
            [
                "id" => 1075,
                "name" => "Oued El Abtal",
                "city_id" => 29
                ,],
            [
                "id" => 1076,
                "name" => "Oued Taria",
                "city_id" => 29
                ,],
            [
                "id" => 1077,
                "name" => "Ras El Aïn Amirouche",
                "city_id" => 29
                ,],
            [
                "id" => 1078,
                "name" => "Sedjerara",
                "city_id" => 29
                ,],
            [
                "id" => 1079,
                "name" => "Sehailia",
                "city_id" => 29
                ,],
            [
                "id" => 1080,
                "name" => "Sidi Abdeldjebar",
                "city_id" => 29
                ,],
            [
                "id" => 1081,
                "name" => "Sidi Abdelmoumen",
                "city_id" => 29
                ,],
            [
                "id" => 1082,
                "name" => "Sidi Kada",
                "city_id" => 29
                ,],
            [
                "id" => 1083,
                "name" => "Sidi Boussaid",
                "city_id" => 29
                ,],
            [
                "id" => 1084,
                "name" => "Sig",
                "city_id" => 29
                ,],
            [
                "id" => 1085,
                "name" => "Tighennif",
                "city_id" => 29
                ,],
            [
                "id" => 1086,
                "name" => "Tizi",
                "city_id" => 29
                ,],
            [
                "id" => 1087,
                "name" => "Zahana",
                "city_id" => 29
                ,],
            [
                "id" => 1088,
                "name" => "Zelmata",
                "city_id" => 29
                ,],
            [
                "id" => 1089,
                "name" => "Aïn Beida",
                "city_id" => 30
                ,],
            [
                "id" => 1090,
                "name" => "Benaceur",
                "city_id" => 30
                ,],
            [
                "id" => 1091,
                "name" => "Blidet Amor",
                "city_id" => 30
                ,],
            [
                "id" => 1092,
                "name" => "El Allia",
                "city_id" => 30
                ,],
            [
                "id" => 1093,
                "name" => "El Borma",
                "city_id" => 30
                ,],
            [
                "id" => 1094,
                "name" => "El Hadjira",
                "city_id" => 30
                ,],
            [
                "id" => 1095,
                "name" => "Hassi Ben Abdellah",
                "city_id" => 30
                ,],
            [
                "id" => 1096,
                "name" => "Hassi Messaoud",
                "city_id" => 30
                ,],
            [
                "id" => 1097,
                "name" => "Megarine",
                "city_id" => 30
                ,],
            [
                "id" => 1098,
                "name" => "M'Naguer",
                "city_id" => 30
                ,],
            [
                "id" => 1099,
                "name" => "Nezla",
                "city_id" => 30
                ,],
            [
                "id" => 1100,
                "name" => "N'Goussa",
                "city_id" => 30
                ,],
            [
                "id" => 1101,
                "name" => "Ouargla",
                "city_id" => 30
                ,],
            [
                "id" => 1102,
                "name" => "Rouissat",
                "city_id" => 30
                ,],
            [
                "id" => 1103,
                "name" => "Sidi Khouiled",
                "city_id" => 30
                ,],
            [
                "id" => 1104,
                "name" => "Sidi Slimane",
                "city_id" => 30
                ,],
            [
                "id" => 1105,
                "name" => "Taibet",
                "city_id" => 30
                ,],
            [
                "id" => 1106,
                "name" => "Tamacine",
                "city_id" => 30
                ,],
            [
                "id" => 1107,
                "name" => "Tebesbest",
                "city_id" => 30
                ,],
            [
                "id" => 1108,
                "name" => "Touggourt",
                "city_id" => 30
                ,],
            [
                "id" => 1109,
                "name" => "Zaouia El Abidia",
                "city_id" => 30
                ,],
            [
                "id" => 1110,
                "name" => "Oran",
                "city_id" => 31
                ,],
            [
                "id" => 1111,
                "name" => "Gdyel",
                "city_id" => 31
                ,],
            [
                "id" => 1112,
                "name" => "Bir El Djir",
                "city_id" => 31
                ,],
            [
                "id" => 1113,
                "name" => "Hassi Bounif",
                "city_id" => 31
                ,],
            [
                "id" => 1114,
                "name" => "Es Senia",
                "city_id" => 31
                ,],
            [
                "id" => 1115,
                "name" => "Arzew",
                "city_id" => 31
                ,],
            [
                "id" => 1116,
                "name" => "Bethioua",
                "city_id" => 31
                ,],
            [
                "id" => 1117,
                "name" => "Marsat El Hadjadj",
                "city_id" => 31
                ,],
            [
                "id" => 1118,
                "name" => "Aïn El Turk",
                "city_id" => 31
                ,],
            [
                "id" => 1119,
                "name" => "El Ançor",
                "city_id" => 31
                ,],
            [
                "id" => 1120,
                "name" => "Oued Tlelat",
                "city_id" => 31
                ,],
            [
                "id" => 1121,
                "name" => "Tafraoui",
                "city_id" => 31
                ,],
            [
                "id" => 1122,
                "name" => "Sidi Chami",
                "city_id" => 31
                ,],
            [
                "id" => 1123,
                "name" => "Boufatis",
                "city_id" => 31
                ,],
            [
                "id" => 1124,
                "name" => "Mers El Kébir",
                "city_id" => 31
                ,],
            [
                "id" => 1125,
                "name" => "Bousfer",
                "city_id" => 31
                ,],
            [
                "id" => 1126,
                "name" => "El Kerma",
                "city_id" => 31
                ,],
            [
                "id" => 1127,
                "name" => "El Braya",
                "city_id" => 31
                ,],
            [
                "id" => 1128,
                "name" => "Hassi Ben Okba",
                "city_id" => 31
                ,],
            [
                "id" => 1129,
                "name" => "Ben Freha",
                "city_id" => 31
                ,],
            [
                "id" => 1130,
                "name" => "Hassi Mefsoukh",
                "city_id" => 31
                ,],
            [
                "id" => 1131,
                "name" => "Sidi Benyebka",
                "city_id" => 31
                ,],
            [
                "id" => 1132,
                "name" => "Misserghin",
                "city_id" => 31
                ,],
            [
                "id" => 1133,
                "name" => "Boutlelis",
                "city_id" => 31
                ,],
            [
                "id" => 1134,
                "name" => "Aïn El Kerma",
                "city_id" => 31
                ,],
            [
                "id" => 1135,
                "name" => "Aïn El Bia",
                "city_id" => 31
                ,],
            [
                "id" => 1136,
                "name" => "El Bayadh",
                "city_id" => 32
                ,],
            [
                "id" => 1137,
                "name" => "Rogassa",
                "city_id" => 32
                ,],
            [
                "id" => 1138,
                "name" => "Stitten",
                "city_id" => 32
                ,],
            [
                "id" => 1139,
                "name" => "Brezina",
                "city_id" => 32
                ,],
            [
                "id" => 1140,
                "name" => "Ghassoul",
                "city_id" => 32
                ,],
            [
                "id" => 1141,
                "name" => "Boualem",
                "city_id" => 32
                ,],
            [
                "id" => 1142,
                "name" => "El Abiodh Sidi Cheikh",
                "city_id" => 32
                ,],
            [
                "id" => 1143,
                "name" => "Aïn El Orak",
                "city_id" => 32
                ,],
            [
                "id" => 1144,
                "name" => "Arbaouat",
                "city_id" => 32
                ,],
            [
                "id" => 1145,
                "name" => "Bougtoub",
                "city_id" => 32
                ,],
            [
                "id" => 1146,
                "name" => "El Kheiter",
                "city_id" => 32
                ,],
            [
                "id" => 1147,
                "name" => "Kef El Ahmar",
                "city_id" => 32
                ,],
            [
                "id" => 1148,
                "name" => "Boussemghoun",
                "city_id" => 32
                ,],
            [
                "id" => 1149,
                "name" => "Chellala",
                "city_id" => 32
                ,],
            [
                "id" => 1150,
                "name" => "Kraakda",
                "city_id" => 32
                ,],
            [
                "id" => 1151,
                "name" => "El Bnoud",
                "city_id" => 32
                ,],
            [
                "id" => 1152,
                "name" => "Cheguig",
                "city_id" => 32
                ,],
            [
                "id" => 1153,
                "name" => "Sidi Ameur",
                "city_id" => 32
                ,],
            [
                "id" => 1154,
                "name" => "El Mehara",
                "city_id" => 32
                ,],
            [
                "id" => 1155,
                "name" => "Tousmouline",
                "city_id" => 32
                ,],
            [
                "id" => 1156,
                "name" => "Sidi Slimane",
                "city_id" => 32
                ,],
            [
                "id" => 1157,
                "name" => "Sidi Tifour",
                "city_id" => 32
                ,],
            [
                "id" => 1158,
                "name" => "Illizi",
                "city_id" => 33
                ,],
            [
                "id" => 1159,
                "name" => "Djanet",
                "city_id" => 33
                ,],
            [
                "id" => 1160,
                "name" => "Debdeb",
                "city_id" => 33
                ,],
            [
                "id" => 1161,
                "name" => "Bordj Omar Driss",
                "city_id" => 33
                ,],
            [
                "id" => 1162,
                "name" => "Bordj El Haouas",
                "city_id" => 33
                ,],
            [
                "id" => 1163,
                "name" => "In Amenas",
                "city_id" => 33
                ,],
            [
                "id" => 1164,
                "name" => "Aïn Taghrout",
                "city_id" => 34
                ,],
            [
                "id" => 1165,
                "name" => "Aïn Tesra",
                "city_id" => 34
                ,],
            [
                "id" => 1166,
                "name" => "Belimour",
                "city_id" => 34
                ,],
            [
                "id" => 1167,
                "name" => "Ben Daoud",
                "city_id" => 34
                ,],
            [
                "id" => 1168,
                "name" => "Bir Kasdali",
                "city_id" => 34
                ,],
            [
                "id" => 1169,
                "name" => "Bordj Bou Arreridj",
                "city_id" => 34
                ,],
            [
                "id" => 1170,
                "name" => "Bordj Ghédir",
                "city_id" => 34
                ,],
            [
                "id" => 1171,
                "name" => "Bordj Zemoura",
                "city_id" => 34
                ,],
            [
                "id" => 1172,
                "name" => "Colla",
                "city_id" => 34
                ,],
            [
                "id" => 1173,
                "name" => "Djaafra",
                "city_id" => 34
                ,],
            [
                "id" => 1174,
                "name" => "El Ach",
                "city_id" => 34
                ,],
            [
                "id" => 1175,
                "name" => "El Achir",
                "city_id" => 34
                ,],
            [
                "id" => 1176,
                "name" => "El Anseur",
                "city_id" => 34
                ,],
            [
                "id" => 1177,
                "name" => "El Hamadia",
                "city_id" => 34
                ,],
            [
                "id" => 1178,
                "name" => "El Main",
                "city_id" => 34
                ,],
            [
                "id" => 1179,
                "name" => "El M'hir",
                "city_id" => 34
                ,],
            [
                "id" => 1180,
                "name" => "Ghilassa",
                "city_id" => 34
                ,],
            [
                "id" => 1181,
                "name" => "Haraza",
                "city_id" => 34
                ,],
            [
                "id" => 1182,
                "name" => "Hasnaoua",
                "city_id" => 34
                ,],
            [
                "id" => 1183,
                "name" => "Khelil",
                "city_id" => 34
                ,],
            [
                "id" => 1184,
                "name" => "Ksour",
                "city_id" => 34
                ,],
            [
                "id" => 1185,
                "name" => "Mansoura",
                "city_id" => 34
                ,],
            [
                "id" => 1186,
                "name" => "Medjana",
                "city_id" => 34
                ,],
            [
                "id" => 1187,
                "name" => "Ouled Brahem",
                "city_id" => 34
                ,],
            [
                "id" => 1188,
                "name" => "Ouled Dahmane",
                "city_id" => 34
                ,],
            [
                "id" => 1189,
                "name" => "Ouled Sidi Brahim",
                "city_id" => 34
                ,],
            [
                "id" => 1190,
                "name" => "Rabta",
                "city_id" => 34
                ,],
            [
                "id" => 1191,
                "name" => "Ras El Oued",
                "city_id" => 34
                ,],
            [
                "id" => 1192,
                "name" => "Sidi Embarek",
                "city_id" => 34
                ,],
            [
                "id" => 1193,
                "name" => "Tefreg",
                "city_id" => 34
                ,],
            [
                "id" => 1194,
                "name" => "Taglait",
                "city_id" => 34
                ,],
            [
                "id" => 1195,
                "name" => "Teniet En Nasr",
                "city_id" => 34
                ,],
            [
                "id" => 1196,
                "name" => "Tassameurt",
                "city_id" => 34
                ,],
            [
                "id" => 1197,
                "name" => "Tixter",
                "city_id" => 34
                ,],
            [
                "id" => 1198,
                "name" => "Afir",
                "city_id" => 35
                ,],
            [
                "id" => 1199,
                "name" => "Ammal",
                "city_id" => 35
                ,],
            [
                "id" => 1200,
                "name" => "Baghlia",
                "city_id" => 35
                ,],
            [
                "id" => 1201,
                "name" => "Ben Choud",
                "city_id" => 35
                ,],
            [
                "id" => 1202,
                "name" => "Beni Amrane",
                "city_id" => 35
                ,],
            [
                "id" => 1203,
                "name" => "Bordj Menaïel",
                "city_id" => 35
                ,],
            [
                "id" => 1204,
                "name" => "Boudouaou",
                "city_id" => 35
                ,],
            [
                "id" => 1205,
                "name" => "Boudouaou-El-Bahri",
                "city_id" => 35
                ,],
            [
                "id" => 1206,
                "name" => "Boumerdes",
                "city_id" => 35
                ,],
            [
                "id" => 1207,
                "name" => "Bouzegza Keddara",
                "city_id" => 35
                ,],
            [
                "id" => 1208,
                "name" => "Chabet el Ameur",
                "city_id" => 35
                ,],
            [
                "id" => 1209,
                "name" => "Corso",
                "city_id" => 35
                ,],
            [
                "id" => 1210,
                "name" => "Dellys",
                "city_id" => 35
                ,],
            [
                "id" => 1211,
                "name" => "Djinet",
                "city_id" => 35
                ,],
            [
                "id" => 1212,
                "name" => "El Kharrouba",
                "city_id" => 35
                ,],
            [
                "id" => 1213,
                "name" => "Hammedi",
                "city_id" => 35
                ,],
            [
                "id" => 1214,
                "name" => "Issers",
                "city_id" => 35
                ,],
            [
                "id" => 1215,
                "name" => "Khemis El-Khechna",
                "city_id" => 35
                ,],
            [
                "id" => 1216,
                "name" => "Larbatache",
                "city_id" => 35
                ,],
            [
                "id" => 1217,
                "name" => "Leghata",
                "city_id" => 35
                ,],
            [
                "id" => 1218,
                "name" => "Naciria",
                "city_id" => 35
                ,],
            [
                "id" => 1219,
                "name" => "Ouled Aïssa",
                "city_id" => 35
                ,],
            [
                "id" => 1220,
                "name" => "Ouled Hedadj",
                "city_id" => 35
                ,],
            [
                "id" => 1221,
                "name" => "Ouled Moussa",
                "city_id" => 35
                ,],
            [
                "id" => 1222,
                "name" => "Si Mustapha",
                "city_id" => 35
                ,],
            [
                "id" => 1223,
                "name" => "Sidi Daoud",
                "city_id" => 35
                ,],
            [
                "id" => 1224,
                "name" => "Souk El Had",
                "city_id" => 35
                ,],
            [
                "id" => 1225,
                "name" => "Taourga",
                "city_id" => 35
                ,],
            [
                "id" => 1226,
                "name" => "Thenia",
                "city_id" => 35
                ,],
            [
                "id" => 1227,
                "name" => "Tidjelabine",
                "city_id" => 35
                ,],
            [
                "id" => 1228,
                "name" => "Timezrit",
                "city_id" => 35
                ,],
            [
                "id" => 1229,
                "name" => "Zemmouri",
                "city_id" => 35
                ,],
            [
                "id" => 1230,
                "name" => "Aïn El Assel",
                "city_id" => 36
                ,],
            [
                "id" => 1231,
                "name" => "Aïn Kerma",
                "city_id" => 36
                ,],
            [
                "id" => 1232,
                "name" => "Asfour",
                "city_id" => 36
                ,],
            [
                "id" => 1233,
                "name" => "Ben Mehidi",
                "city_id" => 36
                ,],
            [
                "id" => 1234,
                "name" => "Berrihane",
                "city_id" => 36
                ,],
            [
                "id" => 1235,
                "name" => "Besbes",
                "city_id" => 36
                ,],
            [
                "id" => 1236,
                "name" => "Bougous",
                "city_id" => 36
                ,],
            [
                "id" => 1237,
                "name" => "Bouhadjar",
                "city_id" => 36
                ,],
            [
                "id" => 1238,
                "name" => "Bouteldja",
                "city_id" => 36
                ,],
            [
                "id" => 1239,
                "name" => "Chebaita Mokhtar",
                "city_id" => 36
                ,],
            [
                "id" => 1240,
                "name" => "Chefia",
                "city_id" => 36
                ,],
            [
                "id" => 1241,
                "name" => "Chihani",
                "city_id" => 36
                ,],
            [
                "id" => 1242,
                "name" => "Dréan",
                "city_id" => 36
                ,],
            [
                "id" => 1243,
                "name" => "Echatt",
                "city_id" => 36
                ,],
            [
                "id" => 1244,
                "name" => "El Aioun",
                "city_id" => 36
                ,],
            [
                "id" => 1245,
                "name" => "El Kala",
                "city_id" => 36
                ,],
            [
                "id" => 1246,
                "name" => "El Tarf",
                "city_id" => 36
                ,],
            [
                "id" => 1247,
                "name" => "Hammam Beni Salah",
                "city_id" => 36
                ,],
            [
                "id" => 1248,
                "name" => "Lac des Oiseaux",
                "city_id" => 36
                ,],
            [
                "id" => 1249,
                "name" => "Oued Zitoun",
                "city_id" => 36
                ,],
            [
                "id" => 1250,
                "name" => "Raml Souk",
                "city_id" => 36
                ,],
            [
                "id" => 1251,
                "name" => "Souarekh",
                "city_id" => 36
                ,],
            [
                "id" => 1252,
                "name" => "Zerizer",
                "city_id" => 36
                ,],
            [
                "id" => 1253,
                "name" => "Zitouna",
                "city_id" => 36
                ,],
            [
                "id" => 1254,
                "name" => "Oum el Assel",
                "city_id" => 37
                ,],
            [
                "id" => 1255,
                "name" => "Tindouf",
                "city_id" => 37
                ,],
            [
                "id" => 1256,
                "name" => "Ammari",
                "city_id" => 38
                ,],
            [
                "id" => 1257,
                "name" => "Beni Chaib",
                "city_id" => 38
                ,],
            [
                "id" => 1258,
                "name" => "Beni Lahcene",
                "city_id" => 38
                ,],
            [
                "id" => 1259,
                "name" => "Boucaid",
                "city_id" => 38
                ,],
            [
                "id" => 1260,
                "name" => "Bordj Bou Naama",
                "city_id" => 38
                ,],
            [
                "id" => 1261,
                "name" => "Bordj El Emir Abdelkader",
                "city_id" => 38
                ,],
            [
                "id" => 1262,
                "name" => "Khemisti",
                "city_id" => 38
                ,],
            [
                "id" => 1263,
                "name" => "Larbaa",
                "city_id" => 38
                ,],
            [
                "id" => 1264,
                "name" => "Lardjem",
                "city_id" => 38
                ,],
            [
                "id" => 1265,
                "name" => "Layoune",
                "city_id" => 38
                ,],
            [
                "id" => 1266,
                "name" => "Lazharia",
                "city_id" => 38
                ,],
            [
                "id" => 1267,
                "name" => "Maacem",
                "city_id" => 38
                ,],
            [
                "id" => 1268,
                "name" => "Melaab",
                "city_id" => 38
                ,],
            [
                "id" => 1269,
                "name" => "Ouled Bessem",
                "city_id" => 38
                ,],
            [
                "id" => 1270,
                "name" => "Sidi Abed",
                "city_id" => 38
                ,],
            [
                "id" => 1271,
                "name" => "Sidi Boutouchent",
                "city_id" => 38
                ,],
            [
                "id" => 1272,
                "name" => "Sidi Lantri",
                "city_id" => 38
                ,],
            [
                "id" => 1273,
                "name" => "Sidi Slimane",
                "city_id" => 38
                ,],
            [
                "id" => 1274,
                "name" => "Tamalaht",
                "city_id" => 38
                ,],
            [
                "id" => 1275,
                "name" => "Theniet El Had",
                "city_id" => 38
                ,],
            [
                "id" => 1276,
                "name" => "Tissemsilt",
                "city_id" => 38
                ,],
            [
                "id" => 1277,
                "name" => "Youssoufia",
                "city_id" => 38
                ,],
            [
                "id" => 1278,
                "name" => "El Oued",
                "city_id" => 39
                ,],
            [
                "id" => 1279,
                "name" => "Robbah",
                "city_id" => 39
                ,],
            [
                "id" => 1280,
                "name" => "Oued El Alenda",
                "city_id" => 39
                ,],
            [
                "id" => 1281,
                "name" => "Bayadha",
                "city_id" => 39
                ,],
            [
                "id" => 1282,
                "name" => "Nakhla",
                "city_id" => 39
                ,],
            [
                "id" => 1283,
                "name" => "Guemar",
                "city_id" => 39
                ,],
            [
                "id" => 1284,
                "name" => "Kouinine",
                "city_id" => 39
                ,],
            [
                "id" => 1285,
                "name" => "Reguiba",
                "city_id" => 39
                ,],
            [
                "id" => 1286,
                "name" => "Hamraia",
                "city_id" => 39
                ,],
            [
                "id" => 1287,
                "name" => "Taghzout",
                "city_id" => 39
                ,],
            [
                "id" => 1288,
                "name" => "Debila",
                "city_id" => 39
                ,],
            [
                "id" => 1289,
                "name" => "Hassani Abdelkrim",
                "city_id" => 39
                ,],
            [
                "id" => 1290,
                "name" => "Hassi Khalifa",
                "city_id" => 39
                ,],
            [
                "id" => 1291,
                "name" => "Taleb Larbi",
                "city_id" => 39
                ,],
            [
                "id" => 1292,
                "name" => "Douar El Ma",
                "city_id" => 39
                ,],
            [
                "id" => 1293,
                "name" => "Sidi Aoun",
                "city_id" => 39
                ,],
            [
                "id" => 1294,
                "name" => "Trifaoui",
                "city_id" => 39
                ,],
            [
                "id" => 1295,
                "name" => "Magrane",
                "city_id" => 39
                ,],
            [
                "id" => 1296,
                "name" => "Beni Guecha",
                "city_id" => 39
                ,],
            [
                "id" => 1297,
                "name" => "Ourmas",
                "city_id" => 39
                ,],
            [
                "id" => 1298,
                "name" => "Still",
                "city_id" => 39
                ,],
            [
                "id" => 1299,
                "name" => "M'Rara",
                "city_id" => 39
                ,],
            [
                "id" => 1300,
                "name" => "Sidi Khellil",
                "city_id" => 39
                ,],
            [
                "id" => 1301,
                "name" => "Tendla",
                "city_id" => 39
                ,],
            [
                "id" => 1302,
                "name" => "El Ogla",
                "city_id" => 39
                ,],
            [
                "id" => 1303,
                "name" => "Mih Ouansa",
                "city_id" => 39
                ,],
            [
                "id" => 1304,
                "name" => "El M'Ghair",
                "city_id" => 39
                ,],
            [
                "id" => 1305,
                "name" => "Djamaa",
                "city_id" => 39
                ,],
            [
                "id" => 1306,
                "name" => "Oum Touyour",
                "city_id" => 39
                ,],
            [
                "id" => 1307,
                "name" => "Sidi Amrane",
                "city_id" => 39
                ,],
            [
                "id" => 1308,
                "name" => "Aïn Touila",
                "city_id" => 40
                ,],
            [
                "id" => 1309,
                "name" => "Babar",
                "city_id" => 40
                ,],
            [
                "id" => 1310,
                "name" => "Baghai",
                "city_id" => 40
                ,],
            [
                "id" => 1311,
                "name" => "Bouhmama",
                "city_id" => 40
                ,],
            [
                "id" => 1312,
                "name" => "Chechar",
                "city_id" => 40
                ,],
            [
                "id" => 1313,
                "name" => "Chelia",
                "city_id" => 40
                ,],
            [
                "id" => 1314,
                "name" => "Djellal",
                "city_id" => 40
                ,],
            [
                "id" => 1315,
                "name" => "El Hamma",
                "city_id" => 40
                ,],
            [
                "id" => 1316,
                "name" => "El Mahmal",
                "city_id" => 40
                ,],
            [
                "id" => 1317,
                "name" => "El Oueldja",
                "city_id" => 40
                ,],
            [
                "id" => 1318,
                "name" => "Ensigha",
                "city_id" => 40
                ,],
            [
                "id" => 1319,
                "name" => "Kais",
                "city_id" => 40
                ,],
            [
                "id" => 1320,
                "name" => "Khenchela",
                "city_id" => 40
                ,],
            [
                "id" => 1321,
                "name" => "Khirane",
                "city_id" => 40
                ,],
            [
                "id" => 1322,
                "name" => "M'Sara",
                "city_id" => 40
                ,],
            [
                "id" => 1323,
                "name" => "M'Toussa",
                "city_id" => 40
                ,],
            [
                "id" => 1324,
                "name" => "Ouled Rechache",
                "city_id" => 40
                ,],
            [
                "id" => 1325,
                "name" => "Remila",
                "city_id" => 40
                ,],
            [
                "id" => 1326,
                "name" => "Tamza",
                "city_id" => 40
                ,],
            [
                "id" => 1327,
                "name" => "Taouzient",
                "city_id" => 40
                ,],
            [
                "id" => 1328,
                "name" => "Yabous",
                "city_id" => 40
                ,],
            [
                "id" => 1329,
                "name" => "Souk Ahras",
                "city_id" => 41
                ,],
            [
                "id" => 1330,
                "name" => "Sedrata",
                "city_id" => 41
                ,],
            [
                "id" => 1331,
                "name" => "Hanancha",
                "city_id" => 41
                ,],
            [
                "id" => 1332,
                "name" => "Mechroha",
                "city_id" => 41
                ,],
            [
                "id" => 1333,
                "name" => "Ouled Driss",
                "city_id" => 41
                ,],
            [
                "id" => 1334,
                "name" => "Tiffech",
                "city_id" => 41
                ,],
            [
                "id" => 1335,
                "name" => "Zaarouria",
                "city_id" => 41
                ,],
            [
                "id" => 1336,
                "name" => "Taoura",
                "city_id" => 41
                ,],
            [
                "id" => 1337,
                "name" => "Drea",
                "city_id" => 41
                ,],
            [
                "id" => 1338,
                "name" => "Heddada",
                "city_id" => 41
                ,],
            [
                "id" => 1339,
                "name" => "Khedara",
                "city_id" => 41
                ,],
            [
                "id" => 1340,
                "name" => "Merahna",
                "city_id" => 41
                ,],
            [
                "id" => 1341,
                "name" => "Ouled Moumene",
                "city_id" => 41
                ,],
            [
                "id" => 1342,
                "name" => "Bir Bou Haouch",
                "city_id" => 41
                ,],
            [
                "id" => 1343,
                "name" => "M'daourouch",
                "city_id" => 41
                ,],
            [
                "id" => 1344,
                "name" => "Oum El Adhaim",
                "city_id" => 41
                ,],
            [
                "id" => 1345,
                "name" => "Aïn Zana",
                "city_id" => 41
                ,],
            [
                "id" => 1346,
                "name" => "Aïn Soltane",
                "city_id" => 41
                ,],
            [
                "id" => 1347,
                "name" => "Ouillen",
                "city_id" => 41
                ,],
            [
                "id" => 1348,
                "name" => "Sidi Fredj",
                "city_id" => 41
                ,],
            [
                "id" => 1349,
                "name" => "Safel El Ouiden",
                "city_id" => 41
                ,],
            [
                "id" => 1350,
                "name" => "Ragouba",
                "city_id" => 41
                ,],
            [
                "id" => 1351,
                "name" => "Khemissa",
                "city_id" => 41
                ,],
            [
                "id" => 1352,
                "name" => "Oued Keberit",
                "city_id" => 41
                ,],
            [
                "id" => 1353,
                "name" => "Terraguelt",
                "city_id" => 41
                ,],
            [
                "id" => 1354,
                "name" => "Zouabi",
                "city_id" => 41
                ,],
            [
                "id" => 1355,
                "name" => "Tipaza",
                "city_id" => 42
                ,],
            [
                "id" => 1356,
                "name" => "Menaceur",
                "city_id" => 42
                ,],
            [
                "id" => 1357,
                "name" => "Larhat",
                "city_id" => 42
                ,],
            [
                "id" => 1358,
                "name" => "Douaouda",
                "city_id" => 42
                ,],
            [
                "id" => 1359,
                "name" => "Bourkika",
                "city_id" => 42
                ,],
            [
                "id" => 1360,
                "name" => "Khemisti",
                "city_id" => 42
                ,],
            [
                "id" => 1361,
                "name" => "Aghbal",
                "city_id" => 42
                ,],
            [
                "id" => 1362,
                "name" => "Hadjout",
                "city_id" => 42
                ,],
            [
                "id" => 1363,
                "name" => "Sidi Amar",
                "city_id" => 42
                ,],
            [
                "id" => 1364,
                "name" => "Gouraya",
                "city_id" => 42
                ,],
            [
                "id" => 1365,
                "name" => "Nador",
                "city_id" => 42
                ,],
            [
                "id" => 1366,
                "name" => "Chaiba",
                "city_id" => 42
                ,],
            [
                "id" => 1367,
                "name" => "Aïn Tagourait",
                "city_id" => 42
                ,],
            [
                "id" => 1368,
                "name" => "Cherchell",
                "city_id" => 42
                ,],
            [
                "id" => 1369,
                "name" => "Damous",
                "city_id" => 42
                ,],
            [
                "id" => 1370,
                "name" => "Merad",
                "city_id" => 42
                ,],
            [
                "id" => 1371,
                "name" => "Fouka",
                "city_id" => 42
                ,],
            [
                "id" => 1372,
                "name" => "Bou Ismaïl",
                "city_id" => 42
                ,],
            [
                "id" => 1373,
                "name" => "Ahmar El Aïn",
                "city_id" => 42
                ,],
            [
                "id" => 1374,
                "name" => "Bouharoun",
                "city_id" => 42
                ,],
            [
                "id" => 1375,
                "name" => "Sidi Ghiles",
                "city_id" => 42
                ,],
            [
                "id" => 1376,
                "name" => "Messelmoun",
                "city_id" => 42
                ,],
            [
                "id" => 1377,
                "name" => "Sidi Rached",
                "city_id" => 42
                ,],
            [
                "id" => 1378,
                "name" => "Koléa",
                "city_id" => 42
                ,],
            [
                "id" => 1379,
                "name" => "Attatba",
                "city_id" => 42
                ,],
            [
                "id" => 1380,
                "name" => "Sidi Semiane",
                "city_id" => 42
                ,],
            [
                "id" => 1381,
                "name" => "Beni Milleuk",
                "city_id" => 42
                ,],
            [
                "id" => 1382,
                "name" => "Hadjeret Ennous",
                "city_id" => 42
                ,],
            [
                "id" => 1383,
                "name" => "Ahmed Rachedi",
                "city_id" => 43
                ,],
            [
                "id" => 1384,
                "name" => "Aïn Beida Harriche",
                "city_id" => 43
                ,],
            [
                "id" => 1385,
                "name" => "Aïn Mellouk",
                "city_id" => 43
                ,],
            [
                "id" => 1386,
                "name" => "Aïn Tine",
                "city_id" => 43
                ,],
            [
                "id" => 1387,
                "name" => "Amira Arrès",
                "city_id" => 43
                ,],
            [
                "id" => 1388,
                "name" => "Benyahia Abderrahmane",
                "city_id" => 43
                ,],
            [
                "id" => 1389,
                "name" => "Bouhatem",
                "city_id" => 43
                ,],
            [
                "id" => 1390,
                "name" => "Chelghoum Laid",
                "city_id" => 43
                ,],
            [
                "id" => 1391,
                "name" => "Chigara",
                "city_id" => 43
                ,],
            [
                "id" => 1392,
                "name" => "Derradji Bousselah",
                "city_id" => 43
                ,],
            [
                "id" => 1393,
                "name" => "El Mechira",
                "city_id" => 43
                ,],
            [
                "id" => 1394,
                "name" => "Elayadi Barbes",
                "city_id" => 43
                ,],
            [
                "id" => 1395,
                "name" => "Ferdjioua",
                "city_id" => 43
                ,],
            [
                "id" => 1396,
                "name" => "Grarem Gouga",
                "city_id" => 43
                ,],
            [
                "id" => 1397,
                "name" => "Hamala",
                "city_id" => 43
                ,],
            [
                "id" => 1398,
                "name" => "Mila",
                "city_id" => 43
                ,],
            [
                "id" => 1399,
                "name" => "Minar Zarza",
                "city_id" => 43
                ,],
            [
                "id" => 1400,
                "name" => "Oued Athmania",
                "city_id" => 43
                ,],
            [
                "id" => 1401,
                "name" => "Oued Endja",
                "city_id" => 43
                ,],
            [
                "id" => 1402,
                "name" => "Oued Seguen",
                "city_id" => 43
                ,],
            [
                "id" => 1403,
                "name" => "Ouled Khalouf",
                "city_id" => 43
                ,],
            [
                "id" => 1404,
                "name" => "Rouached",
                "city_id" => 43
                ,],
            [
                "id" => 1405,
                "name" => "Sidi Khelifa",
                "city_id" => 43
                ,],
            [
                "id" => 1406,
                "name" => "Sidi Merouane",
                "city_id" => 43
                ,],
            [
                "id" => 1407,
                "name" => "Tadjenanet",
                "city_id" => 43
                ,],
            [
                "id" => 1408,
                "name" => "Tassadane Haddada",
                "city_id" => 43
                ,],
            [
                "id" => 1409,
                "name" => "Teleghma",
                "city_id" => 43
                ,],
            [
                "id" => 1410,
                "name" => "Terrai Bainen",
                "city_id" => 43
                ,],
            [
                "id" => 1411,
                "name" => "Tessala Lemtaï",
                "city_id" => 43
                ,],
            [
                "id" => 1412,
                "name" => "Tiberguent",
                "city_id" => 43
                ,],
            [
                "id" => 1413,
                "name" => "Yahia Beni Guecha",
                "city_id" => 43
                ,],
            [
                "id" => 1414,
                "name" => "Zeghaia",
                "city_id" => 43
                ,],
            [
                "id" => 1415,
                "name" => "Aïn Beniane",
                "city_id" => 44
                ,],
            [
                "id" => 1416,
                "name" => "Aïn Bouyahia",
                "city_id" => 44
                ,],
            [
                "id" => 1417,
                "name" => "Aïn Defla",
                "city_id" => 44
                ,],
            [
                "id" => 1418,
                "name" => "Aïn Lechiekh",
                "city_id" => 44
                ,],
            [
                "id" => 1419,
                "name" => "Aïn Soltane",
                "city_id" => 44
                ,],
            [
                "id" => 1420,
                "name" => "Aïn Torki",
                "city_id" => 44
                ,],
            [
                "id" => 1421,
                "name" => "Arib",
                "city_id" => 44
                ,],
            [
                "id" => 1422,
                "name" => "Bathia",
                "city_id" => 44
                ,],
            [
                "id" => 1423,
                "name" => "Belaas",
                "city_id" => 44
                ,],
            [
                "id" => 1424,
                "name" => "Ben Allal",
                "city_id" => 44
                ,],
            [
                "id" => 1425,
                "name" => "Birbouche",
                "city_id" => 44
                ,],
            [
                "id" => 1426,
                "name" => "Bir Ould Khelifa",
                "city_id" => 44
                ,],
            [
                "id" => 1427,
                "name" => "Bordj Emir Khaled",
                "city_id" => 44
                ,],
            [
                "id" => 1428,
                "name" => "Boumedfaa",
                "city_id" => 44
                ,],
            [
                "id" => 1429,
                "name" => "Bourached",
                "city_id" => 44
                ,],
            [
                "id" => 1430,
                "name" => "Djelida",
                "city_id" => 44
                ,],
            [
                "id" => 1431,
                "name" => "Djemaa Ouled Cheikh",
                "city_id" => 44
                ,],
            [
                "id" => 1432,
                "name" => "Djendel",
                "city_id" => 44
                ,],
            [
                "id" => 1433,
                "name" => "El Abadia",
                "city_id" => 44
                ,],
            [
                "id" => 1434,
                "name" => "El Amra",
                "city_id" => 44
                ,],
            [
                "id" => 1435,
                "name" => "El Attaf",
                "city_id" => 44
                ,],
            [
                "id" => 1436,
                "name" => "El Hassania",
                "city_id" => 44
                ,],
            [
                "id" => 1437,
                "name" => "El Maine",
                "city_id" => 44
                ,],
            [
                "id" => 1438,
                "name" => "Hammam Righa",
                "city_id" => 44
                ,],
            [
                "id" => 1439,
                "name" => "Hoceinia",
                "city_id" => 44
                ,],
            [
                "id" => 1440,
                "name" => "Khemis Miliana",
                "city_id" => 44
                ,],
            [
                "id" => 1441,
                "name" => "Mekhatria",
                "city_id" => 44
                ,],
            [
                "id" => 1442,
                "name" => "Miliana",
                "city_id" => 44
                ,],
            [
                "id" => 1443,
                "name" => "Oued Chorfa",
                "city_id" => 44
                ,],
            [
                "id" => 1444,
                "name" => "Oued Djemaa",
                "city_id" => 44
                ,],
            [
                "id" => 1445,
                "name" => "Rouina",
                "city_id" => 44
                ,],
            [
                "id" => 1446,
                "name" => "Sidi Lakhdar",
                "city_id" => 44
                ,],
            [
                "id" => 1447,
                "name" => "Tacheta Zougagha",
                "city_id" => 44
                ,],
            [
                "id" => 1448,
                "name" => "Tarik Ibn Ziad",
                "city_id" => 44
                ,],
            [
                "id" => 1449,
                "name" => "Tiberkanine",
                "city_id" => 44
                ,],
            [
                "id" => 1450,
                "name" => "Zeddine",
                "city_id" => 44
                ,],
            [
                "id" => 1451,
                "name" => "Naâma",
                "city_id" => 45
                ,],
            [
                "id" => 1452,
                "name" => "Mecheria",
                "city_id" => 45
                ,],
            [
                "id" => 1453,
                "name" => "Aïn Sefra",
                "city_id" => 45
                ,],
            [
                "id" => 1454,
                "name" => "Tiout",
                "city_id" => 45
                ,],
            [
                "id" => 1455,
                "name" => "Sfissifa",
                "city_id" => 45
                ,],
            [
                "id" => 1456,
                "name" => "Moghrar",
                "city_id" => 45
                ,],
            [
                "id" => 1457,
                "name" => "Assela",
                "city_id" => 45
                ,],
            [
                "id" => 1458,
                "name" => "Djeniene Bourezg",
                "city_id" => 45
                ,],
            [
                "id" => 1459,
                "name" => "Aïn Ben Khelil",
                "city_id" => 45
                ,],
            [
                "id" => 1460,
                "name" => "Makman Ben Amer",
                "city_id" => 45
                ,],
            [
                "id" => 1461,
                "name" => "Kasdir",
                "city_id" => 45
                ,],
            [
                "id" => 1462,
                "name" => "El Biod",
                "city_id" => 45
                ,],
            [
                "id" => 1463,
                "name" => "Aghlal",
                "city_id" => 46
                ,],
            [
                "id" => 1464,
                "name" => "Aïn El Arbaa",
                "city_id" => 46
                ,],
            [
                "id" => 1465,
                "name" => "Aïn Kihal",
                "city_id" => 46
                ,],
            [
                "id" => 1466,
                "name" => "Aïn Témouchent",
                "city_id" => 46
                ,],
            [
                "id" => 1467,
                "name" => "Aïn Tolba",
                "city_id" => 46
                ,],
            [
                "id" => 1468,
                "name" => "Aoubellil",
                "city_id" => 46
                ,],
            [
                "id" => 1469,
                "name" => "Beni Saf",
                "city_id" => 46
                ,],
            [
                "id" => 1470,
                "name" => "Bouzedjar",
                "city_id" => 46
                ,],
            [
                "id" => 1471,
                "name" => "Chaabat El Leham",
                "city_id" => 46
                ,],
            [
                "id" => 1472,
                "name" => "Chentouf",
                "city_id" => 46
                ,],
            [
                "id" => 1473,
                "name" => "El Amria",
                "city_id" => 46
                ,],
            [
                "id" => 1474,
                "name" => "El Emir Abdelkader",
                "city_id" => 46
                ,],
            [
                "id" => 1475,
                "name" => "El Malah",
                "city_id" => 46
                ,],
            [
                "id" => 1476,
                "name" => "El Messaid",
                "city_id" => 46
                ,],
            [
                "id" => 1477,
                "name" => "Hammam Bouhadjar",
                "city_id" => 46
                ,],
            [
                "id" => 1478,
                "name" => "Hassasna",
                "city_id" => 46
                ,],
            [
                "id" => 1479,
                "name" => "Hassi El Ghella",
                "city_id" => 46
                ,],
            [
                "id" => 1480,
                "name" => "Oued Berkeche",
                "city_id" => 46
                ,],
            [
                "id" => 1481,
                "name" => "Oued Sabah",
                "city_id" => 46
                ,],
            [
                "id" => 1482,
                "name" => "Ouled Boudjemaa",
                "city_id" => 46
                ,],
            [
                "id" => 1483,
                "name" => "Ouled Kihal",
                "city_id" => 46
                ,],
            [
                "id" => 1484,
                "name" => "Oulhaça El Gheraba",
                "city_id" => 46
                ,],
            [
                "id" => 1485,
                "name" => "Sidi Ben Adda",
                "city_id" => 46
                ,],
            [
                "id" => 1486,
                "name" => "Sidi Boumedienne",
                "city_id" => 46
                ,],
            [
                "id" => 1487,
                "name" => "Sidi Ouriache",
                "city_id" => 46
                ,],
            [
                "id" => 1488,
                "name" => "Sidi Safi",
                "city_id" => 46
                ,],
            [
                "id" => 1489,
                "name" => "Tamzoura",
                "city_id" => 46
                ,],
            [
                "id" => 1490,
                "name" => "Terga",
                "city_id" => 46
                ,],
            [
                "id" => 1491,
                "name" => "Berriane (Bergan)",
                "city_id" => 47
                ,],
            [
                "id" => 1492,
                "name" => "Bounoura (At Bounour)",
                "city_id" => 47
                ,],
            [
                "id" => 1493,
                "name" => "Dhayet Bendhahoua",
                "city_id" => 47
                ,],
            [
                "id" => 1494,
                "name" => "El Atteuf (Tajnint)",
                "city_id" => 47
                ,],
            [
                "id" => 1495,
                "name" => "El Guerrara (Aguerrar)",
                "city_id" => 47
                ,],
            [
                "id" => 1496,
                "name" => "El Menia (El Golea ou Tawrirt)",
                "city_id" => 47
                ,],
            [
                "id" => 1497,
                "name" => "Ghardaïa (Tagherdayt)",
                "city_id" => 47
                ,],
            [
                "id" => 1498,
                "name" => "Hassi Fehal",
                "city_id" => 47
                ,],
            [
                "id" => 1499,
                "name" => "Hassi Gara",
                "city_id" => 47
                ,],
            [
                "id" => 1500,
                "name" => "Mansoura",
                "city_id" => 47
                ,],
            [
                "id" => 1501,
                "name" => "Metlili (Ametlili)",
                "city_id" => 47
                ,],
            [
                "id" => 1502,
                "name" => "Sebseb",
                "city_id" => 47
                ,],
            [
                "id" => 1503,
                "name" => "Zelfana",
                "city_id" => 47
                ,],
            [
                "id" => 1504,
                "name" => "Aïn Rahma",
                "city_id" => 48
                ,],
            [
                "id" => 1505,
                "name" => "Aïn Tarek",
                "city_id" => 48
                ,],
            [
                "id" => 1506,
                "name" => "'Aarch Meknassa",
                "city_id" => 48
                ,],
            [
                "id" => 1507,
                "name" => "Ammi Moussa",
                "city_id" => 48
                ,],
            [
                "id" => 1508,
                "name" => "Belassel Bouzegza",
                "city_id" => 48
                ,],
            [
                "id" => 1509,
                "name" => "Bendaoud",
                "city_id" => 48
                ,],
            [
                "id" => 1510,
                "name" => "Beni Dergoun",
                "city_id" => 48
                ,],
            [
                "id" => 1511,
                "name" => "Beni Zentis",
                "city_id" => 48
                ,],
            [
                "id" => 1512,
                "name" => "Dar Ben Abdellah",
                "city_id" => 48
                ,],
            [
                "id" => 1513,
                "name" => "Djidioua",
                "city_id" => 48
                ,],
            [
                "id" => 1514,
                "name" => "El Guettar",
                "city_id" => 48
                ,],
            [
                "id" => 1515,
                "name" => "El Hamadna",
                "city_id" => 48
                ,],
            [
                "id" => 1516,
                "name" => "El Hassi",
                "city_id" => 48
                ,],
            [
                "id" => 1517,
                "name" => "El Matmar",
                "city_id" => 48
                ,],
            [
                "id" => 1518,
                "name" => "El Ouldja",
                "city_id" => 48
                ,],
            [
                "id" => 1519,
                "name" => "Had Echkalla",
                "city_id" => 48
                ,],
            [
                "id" => 1520,
                "name" => "Hamri",
                "city_id" => 48
                ,],
            [
                "id" => 1521,
                "name" => "Kalaa",
                "city_id" => 48
                ,],
            [
                "id" => 1522,
                "name" => "Lahlef",
                "city_id" => 48
                ,],
            [
                "id" => 1523,
                "name" => "Mazouna",
                "city_id" => 48
                ,],
            [
                "id" => 1524,
                "name" => "Mediouna",
                "city_id" => 48
                ,],
            [
                "id" => 1525,
                "name" => "Mendes",
                "city_id" => 48
                ,],
            [
                "id" => 1526,
                "name" => "Merdja Sidi Abed",
                "city_id" => 48
                ,],
            [
                "id" => 1527,
                "name" => "Ouarizane",
                "city_id" => 48
                ,],
            [
                "id" => 1528,
                "name" => "Oued Essalem",
                "city_id" => 48
                ,],
            [
                "id" => 1529,
                "name" => "Oued Rhiou",
                "city_id" => 48
                ,],
            [
                "id" => 1530,
                "name" => "Ouled Aiche",
                "city_id" => 48
                ,],
            [
                "id" => 1531,
                "name" => "Oued El Djemaa",
                "city_id" => 48
                ,],
            [
                "id" => 1532,
                "name" => "Ouled Sidi Mihoub",
                "city_id" => 48
                ,],
            [
                "id" => 1533,
                "name" => "Ramka",
                "city_id" => 48
                ,],
            [
                "id" => 1534,
                "name" => "Relizane",
                "city_id" => 48
                ,],
            [
                "id" => 1535,
                "name" => "Sidi Khettab",
                "city_id" => 48
                ,],
            [
                "id" => 1536,
                "name" => "Sidi Lazreg",
                "city_id" => 48
                ,],
            [
                "id" => 1537,
                "name" => "Sidi M'Hamed Ben Ali",
                "city_id" => 48
                ,],
            [
                "id" => 1538,
                "name" => "Sidi M'Hamed Benaouda",
                "city_id" => 48
                ,],
            [
                "id" => 1539,
                "name" => "Sidi Saada",
                "city_id" => 48
                ,],
            [
                "id" => 1540,
                "name" => "Souk El Had",
                "city_id" => 48
                ,],
            [
                "id" => 1541,
                "name" => "Yellel",
                "city_id" => 48
                ,],
            [
                "id" => 1542,
                "name" => "Zemmora",
                "city_id" => 48
                ,],
        ]);
    }
}
