<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tariffs;

class TariffsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tariff1 = Tariffs::create([
            'title' => '% ставка',
            'description' => '3,08% в місяць',
            'category' => 'other',
            'footer' => 'в місяць (пільгова % ставка 0,0001%)'
        ]);

        $tariff2 = Tariffs::create([
            'title' => 'кредитний ліміт',
            'description' => 'до 200 000 ₴',
            'category' => 'other',
            'footer' => ''
        ]);

        $tariff3 = Tariffs::create(
            [
                'title' => 'пільговий період',
                'description' => 'до 62 днів',
                'category' => 'other',
                'footer' => ''
            ]
        );

        $tariff4 = Tariffs::create(
            [
                'title' => 'обовʼязковий мінімальний платіж',
                'description' => '5%',
                'category' => 'refill',
                'footer' => 'від суми кредиту, але не менше 100 ₴'
            ]
        );

        $tariff5 = Tariffs::create(
            [
                'title' => 'кешбек',
                'description' => '% на вибір',
                'category' => 'other',
                'footer' => '1% на всі покупки + 2% п’ятничний або щомісяця підвищений % на нові категорії'
            ]
        );

        $tariff6 = Tariffs::create(
            [
                'title' => 'оплата комуналки',
                'description' => 'безкоштовно',
                'category' => 'refill',
                'footer' => 'в тому числі за рахунок кредитних коштів'
            ]
        );

        $tariff7 = Tariffs::create(
            [
                'title' => 'поповнення мобільного',
                'description' => 'безкоштовно',
                'category' => 'refill',
                'footer' => ''
            ]
        );

        $tariff8 = Tariffs::create(
            [
                'title' => 'переказ з картки на картку',
                'description' => 'безкоштовно',
                'category' => 'refill',
                'footer' => 'власні кошти кредитні кошти — 4%'
            ]
        );

        $tariff9 = Tariffs::create(
            [
                'title' => 'валютообмін',
                'description' => 'безкоштовно',
                'category' => 'refill',
                'footer' => 'власні кошти кредитні кошти — 4%'
            ]
        );

        $tariff10 = Tariffs::create(
            [
                'title' => 'зняття готівки в банкоматах',
                'description' => 'безкоштовно',
                'category' => 'refill',
                'footer' => 'власні кошти (в мережі Таскомбанк) 4,9% кредитні кошти'
            ]
        );

        $tariff11 = Tariffs::create(
            [
                'title' => 'переказ за реквізитами',
                'description' => 'безкоштовно',
                'category' => 'refill',
                'footer' => 'власні кошти (до 10 000 ₴) кредитні кошти 2%'
            ]
        );

        $tariff12 = Tariffs::create(
            [
                'title' => 'тип картки',
                'description' => 'MasterCard World Contactless',
                'category' => 'other',
                'footer' => 'власні кошти'
            ]
        );

        $tariff13 = Tariffs::create(
            [
                'title' => 'поповнення картки',
                'description' => 'безкоштовно',
                'category' => 'refill',
                'footer' => ''
            ]
        );

        $tariff14 = Tariffs::create(
            [
                'title' => 'оформлення та обслуговування',
                'description' => 'безкоштовно',
                'category' => 'registration',
                'footer' => ''
            ]
        );

        $tariff15 = Tariffs::create(
            [
                'title' => 'оформлення віртуальної картки',
                'description' => 'безкоштовно',
                'category' => 'registration',
                'footer' => 'гривня ₴ долар $ євро € ("registration" category)'
            ]
        );

        $tariff16 = Tariffs::create(
            [
                'title' => 'оформлення віртуальної картки',
                'description' => 'безкоштовно',
                'category' => 'other',
                'footer' => 'гривня ₴ долар $ євро € ("other" category)'
            ]
        );
    }
}
