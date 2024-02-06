<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,3,3,3,3,3,3,3,3,3,3,4,4,4,4,4,4,4,4,4,4,5,5,5,5,5,5,5,5,5,6,6,6,6,7,7,7,7,7,7,7,7,7,7,8,8,8,8,8,8,8,8,8,8,9,9,9,9,9,9,9,10,10,10,10,10,10,10,10,10,10,11,11,11,11,11,11,11,11,11,11,12,12,12,12,12,12,12,12,12,12,13,13,13,13,13,13,13,13,13,13,14,14,14,14,14,14,14,14,14,14,15,16,17,18,19,19,19,19,19,19,19,19,19,19,20,20,20,20,20,20,20,20,20,20,21,21,21,21,21,21,21,21,21,21,22,23,23,23,23,23,23,23,23,23,23,24,24,24,24,24,24,24,24,24,24,25,26,26,26,26,26,26,26,26,26,26,27,27,27,27,27,27,27,27,28,28,28,28,28,28,28,28,28,28];

        $lgas = ["Hyderabad","Vijayawada","Visakhapatnam","Guntur","Nellore","Kurnool","Rajamahendravaram","Tirupati","Kakinada","Anantapur","Vizianagaram","Eluru","Ongole","Nandyal","Machilipatnam","Adoni","Tenali","Proddatur","Chittoor","Hindupur","Itanagar","Naharlagun","Guwahati","Silchar","Dibrugarh","Jorhat","Nagaon","Tinsukia","Tezpur","Bongaigaon","Dhubri","Sivasagar","Patna","Gaya","Bhagalpur","Muzaffarpur","Purnia","Darbhanga","Bihar Sharif","Arrah","Begusarai","Katihar","Raipur","Bhilai","Bilaspur","Korba","Durg","Rajnandgaon","Raigarh","Jagdalpur","Ambikapur","Panaji","Margoa","Mapusa","Ponda","Ahmedabad","Surat","Vadodara","Rajkot","Bhavnagar","Jamnagar","Junagadh","Gandhinagar","Nadiad","Anand","Faridabad","Gurugram","Panipat","Ambala","Yamunanagar","Rohtak","Hisar","Karnal","Sonipat","Panchkula","Shimla","Solan","Dharamshala","Mandi","Una","Kullu","Chamba","Ranchi","Jamshedpur","Dhanbad","Bokaro","Deoghar","Hazaribagh","Giridih","Ramgarh","Medininagar","Chirkunda","Bengaluru","Mysuru","Hubballi","Mangalore","Belgaum","Davanagere","Ballari","Vijayapura","Shivamogga","Tumkur","Thiruvananthapuram","Kochi","Kozhikode","Kollam","Thrissur","Kannur","Alappuzha","Palakkad","Kottayam","Manjeri","Indore","Bhopal","Jabalpur","Gwalior","Ujjain","Sagar","Dewas","Satna","Ratlam","Rewa","Mumbai","Pune","Nagpur","Thane","Nashik","Vasai-Virar","Aurangabad","Solapur","Bhiwandi","Amravati","Imphal","Shillong","Aizawl","Kohima","Bhubaneswar","Cuttack","Rourkela","Berhampur","Sambalpur","Puri","Balasore","Bhadrak","Baripada","Jharsuguda","Amritsar","Ludhiana","Jalandhar","Patiala","Bathinda","Hoshiarpur","Mohali","Batala","Pathankot","Moga","Jaipur","Jodhpur","Kota","Bikaner","Ajmer","Udaipur","Bhilwara","Alwar","Sikar","Pali","Gangtok","Chennai","Coimbatore","Madurai","Tiruchirappalli","Salem","Tirunelveli","Tiruppur","Ambattur","Avadi","Thoothukudi","Hyderabad","Warangal","Nizamabad","Khammam","Karimnagar","Ramagundam","Mahbubnagar","Nalgonda","Adilabad","Suryapet","Agartala","Lucknow","Kanpur","Ghaziabad","Agra","Varanasi","Meerut","Allahabad","Bareilly","Aligarh","Moradabad","Dehradun","Haridwar","Roorkee","Haldwani","Rudrapur","Kashipur","Rishikesh","Pauri","Kolkata","Asansol","Siliguri","Durgapur","Bardhaman","Malda","Baharampur","Habra","Kharagpur","Raiganj"];

        for($i=0; $i<count($lgas); $i++){
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }

}
