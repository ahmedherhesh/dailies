<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'role' => 'عميد',
                'fullname' => 'هشام جوده عراقي دياب'
            ],
            [
                'role' => 'مقدم',
                'fullname' =>         'سامح عبد الوهاب أحمد عبد الوهاب',
            ],
            [
                'role' => 'نقيب',
                'fullname' =>         'رمضان احمد رمضان الهنداوي',
            ],
            [
                'role' => 'نقيب',
                'fullname' =>         'كريم رضا محمد سيد كساب',
            ],
            [
                'role' => 'مقدم',
                'fullname' =>         'سالم نبيل سالم إبراهيم',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'أيمن حسن عبدالله الخضر',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'إبراهيم محمد إبراهيم ابراهيم العزبي',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'أحمد عبدالله عبدالله السقا اللوزي',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'نبيه محمد دويدار دويدار تقى الدين',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'عمر علاء حسب النبي محمد الشورى',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'محمد مصطفى نجاح مصطفى الدسوقي',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'باسم وليد فاضل وهدان',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'فهد احمد على الطنبولى',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'محمود صبري محمد السقا اللوزي',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'محمد السيد سليمان الجميلى',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'سعد محمد سعد عبد الله محمد الشحات',
            ],
            [
                'role' => 'م اول',
                'fullname' => 'احمد السعيد عبدالمعطي علي',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'خالد حسين خالد محمد عبدالعال حماد',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'عمرو عبد المعطي محمد فريد احمد',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'كريم أحمد طاهر مسعد شوربه',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'أحمد محمد عبدالسميع مصطفى مقبل',
            ],
            [
                'role' => 'مقدم',
                'fullname' => 'احمد محمد حفني النجار',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'علي محمد علي عبد الحميد الطنطاوي',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'ايهاب بديع عبد العظيم محمد',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'محمد اسامه عبد الغني التهامي',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'عمرو هشام عبدالغفار امين',
            ],
            [
                'role' => 'مقدم',
                'fullname' => 'محمد عاصم السيد محمد إسماعيل',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'حسام مصطفى السيد محمد',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'محمد إبراهيم جاب الله الشرقاوي',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'اسلام محمد عبدالله عطية',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'كريم محمد حامد أحمد فودة',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'يوسف محمد محمد عبدالوهاب',
            ],
            [
                'role' => 'م اول',
                'fullname' => 'احمد محمد رضا محمود علي العادلي',
            ],
            [
                'role' => 'م اول',
                'fullname' => 'هشام عبد الخالق السعيد جعفر',
            ],
            [
                'role' => 'م اول',
                'fullname' => 'عبدالمنعم مجدي عبدالمنعم موسي شامه ',
            ],
            [
                'role' => 'م اول',
                'fullname' => 'محمد ادهم صلاح عابدين الالفي ',
            ],
            [
                'role' => 'م اول',
                'fullname' => 'محمد طارق حلمي محمد عدوي',
            ],
            [
                'role' => 'م اول',
                'fullname' => 'احمد مهدي محمد مهدي',
            ],
            [
                'role' => 'رائد',
                'fullname' => 'علي  اسامه محمد على ضلع',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'محمود شعبان عبد الحليم السيد شمعه',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'عبدالرحمن لطفي عبد المقصود ندا',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'عبدالعزيز معالي عبدالعزيز احمد سلامه',
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'محمود محمد  محمود  محمد  سرحان'
            ],
            [
                'role' => 'نقيب',
                'fullname' => 'احمد صلاح محمد عبدالوهاب احمد'
            ],
        ];
        foreach($users as $user){

            User::create($user);
        }
    }
}
