<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table(‘people’)
->insert(array(
  array('id' => '1','fullname' => 'Королевский Александр Алексеевич','imgpath' => 'https://pp.userapi.com/c630616/v630616373/31fbc/ZhTHWVQ5ygI.jpg','email' => 'korsashak98@mail.ru','phone' => '89677120135','birthdate' => '1998-02-11','middleeducation' => 'Школа №123','higheducation' => 'СПбГЭТУ "ЛЭТИ"','city' => 'Санкт-Петербург','vk' => 'https://vk.com/ialeksashai','inst' => 'https://instagram.com/ialeksashai','fb' => 'https://facebook.com/ialeksashai','created_at' => NULL,'updated_at' => NULL),
  array('id' => '2','fullname' => 'Иван Владимирович Кузьмин','imgpath' => 'https://pp.userapi.com/c855324/v855324029/376fb/0l_h62tx3sE.jpg','email' => 'kuzmivla@mail.ru','phone' => NULL,'birthdate' => '1997-02-11','middleeducation' => 'Школа №3','higheducation' => NULL,'city' => 'Санкт-Петербург','vk' => 'https://vk.com/','inst' => NULL,'fb' => NULL,'created_at' => NULL,'updated_at' => NULL),
  array('id' => '3','fullname' => 'Дмитрий Александрович Профин','imgpath' => 'https://pp.userapi.com/c840731/v840731392/7e381/MTr1lAfPv2g.jpg','email' => NULL,'phone' => '89506217510','birthdate' => '1999-02-11','middleeducation' => NULL,'higheducation' => NULL,'city' => 'Саратов','vk' => NULL,'inst' => NULL,'fb' => NULL,'created_at' => NULL,'updated_at' => NULL),
  array('id' => '4','fullname' => 'Евгений Викторович Кулебеев','imgpath' => 'https://pp.userapi.com/c850228/v850228609/10e4b2/HIobmy4_ms8.jpg?ava=1','email' => NULL,'phone' => NULL,'birthdate' => '2001-02-11','middleeducation' => 'Школа №20','higheducation' => 'СПбГЭТУ "ЛЭТИ"','city' => 'Санкт-Петербург','vk' => 'https://vk.com/mediynayablad','inst' => 'https://vk.com/mediynayablad','fb' => NULL,'created_at' => NULL,'updated_at' => NULL),
  array('id' => '5','fullname' => 'Татьяна Викторовна Лугина','imgpath' => 'https://pp.userapi.com/c849532/v849532983/3c34b/cRbx23gJjfU.jpg','email' => 'lugg@gmail.com','phone' => '895578330134','birthdate' => '1990-02-11','middleeducation' => 'Школа №11','higheducation' => 'СПбГЭТУ "ЛЭТИ"','city' => 'Санкт-Петербург','vk' => 'https://vk.com/tanya','inst' => 'https://instagram.com/tanya','fb' => NULL,'created_at' => NULL,'updated_at' => NULL),
  array('id' => '6','fullname' => 'Антон Павлович Чебсен','imgpath' => 'https://pp.userapi.com/c844416/v844416336/19e7e0/2R69Vy9VMIo.jpg','email' => 'an4@gmail.com','phone' => NULL,'birthdate' => '1990-02-11','middleeducation' => 'Школа №15','higheducation' => NULL,'city' => 'New-York','vk' => 'https://vk.com/anton','inst' => 'https://instagram.com/anton','fb' => NULL,'created_at' => NULL,'updated_at' => NULL),
  array('id' => '7','fullname' => 'Виктор Владимирович Шатц','imgpath' => 'https://pp.userapi.com/c850632/v850632622/e49f2/FgFJuDiAHuY.jpg','email' => NULL,'phone' => '89561375639','birthdate' => '1990-02-11','middleeducation' => 'Школа №114','higheducation' => 'МГУ','city' => 'Москва','vk' => NULL,'inst' => NULL,'fb' => NULL,'created_at' => NULL,'updated_at' => NULL),
  array('id' => '8','fullname' => 'Владимир Сергеевич Листейко','imgpath' => 'https://sun1-27.userapi.com/c845221/v845221032/116888/1VSFm0GEVZg.jpg?ava=1','email' => NULL,'phone' => NULL,'birthdate' => '1990-02-11','middleeducation' => NULL,'higheducation' => NULL,'city' => 'Москва','vk' => NULL,'inst' => NULL,'fb' => NULL,'created_at' => NULL,'updated_at' => NULL)
));
    }
}
