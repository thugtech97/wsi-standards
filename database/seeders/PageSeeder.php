<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $homeHTML = '';

        $aboutHTML = '';

        $servicesHTML = '';

        $tourpackagesHTML = '';

        $contactUsHTML = '';

        $newsHTML = '';
        
        $footerHTML = '<footer id="footer" draggable="true" data-highlightable="1" class="border-0 border-top">
                    <div id="copyrights" draggable="true" data-highlightable="1"><div id="i4xn9t" draggable="true" data-highlightable="1" class="container"><div id="iswjil" draggable="true" data-highlightable="1" class="row justify-content-between"><div id="iq9mwh" draggable="true" data-highlightable="1" class="col"><span id="ing3xk" draggable="true" data-highlightable="1" class="text-black-50">© 2023 House of Travel, Inc.</span><a id="iwrref" draggable="true" data-highlightable="1" href="https://beta.houseoftravel.com.ph/privacy-policy-2" class="gjs-comp-selected">&nbsp; Privacy Policy&nbsp;</a></div><div id="iolzho" draggable="true" data-highlightable="1" class="col text-end">
                    <a id="ih72js" draggable="true" data-highlightable="1" href="https://beta.houseoftravel.com.ph/">Home</a>/
                    <a id="ie71qy" draggable="true" data-highlightable="1" href="https://beta.houseoftravel.com.ph/about-us">About</a>/
                    <a id="iov9rf" draggable="true" data-highlightable="1" href="https://beta.houseoftravel.com.ph/services">Services</a>/
                    <a id="iscxtz" draggable="true" data-highlightable="1" href="https://beta.houseoftravel.com.ph/tour-packages">Tour Packages</a>/
                    <a id="ij9ta8" draggable="true" data-highlightable="1" href="https://beta.houseoftravel.com.ph/contact-us">Contact Us</a></div></div></div></div></footer>';

        $footerJson = '{
                    "gjs-css": "* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin:0;}#iwrref{margin:0 5px 0 5px;}section:empty{min-height:40px;}#iemunx{padding:5px 5px 5px 5px;}#i1i6is{max-width:100%;padding:0 8.5% 0 8.5%;}#iitz4f{padding:5px 0 5px 0;margin:0 0 0 0;}#ixv6f{color:#eeeeee;}#id8oa{color:#eeeeee;}#ik38c{color:#eeeeee;}#ik5dp{color:#eeeeee;}#ismbm{color:#eeeeee;}#ikcll{color:#eeeeee;}#ifhz9{color:#ffffff;}#i4wol{color:#eeeeee;}#ieq4nl{color:#eeeeee;}#imbj0k{color:#eeeeee;}#footer{color:#ffffff;}#is88i{color:#ffffff;}#ivj09{color:#ffffff;}#ifd2fw{color:#ffffff;}#i806og{color:#ffffff;}#ib5gh{color:#ffffff;}#i7ksx3{color:#ffffff;}",
                    "gjs-html": "<footer id=\"footer\" draggable=\"true\" data-highlightable=\"1\" class=\"border-0 border-top\"><section id=\"iemunx\"><div id=\"i1i6is\" class=\"container\"><img id=\"i97g\" draggable=\"true\" src=\"http://beta.houseoftravel.com.ph/theme/images/hoti-logo-white.png\"/><div id=\"iitz4f\" class=\"row\"><div id=\"i9hpi\" draggable=\"true\" data-highlightable=\"1\" class=\"dark col-lg-4 col-md-12 col-sm-12\"><div id=\"iyu6m\" draggable=\"true\" data-highlightable=\"1\" class=\"table-responsive\"><table id=\"izdyd\" draggable=\"true\" data-highlightable=\"1\"><tbody id=\"ijf7w\" draggable=\"true\" data-highlightable=\"1\"><tr id=\"i765f\" draggable=\"true\" data-highlightable=\"1\"><td id=\"inf9q\" draggable=\"true\" data-highlightable=\"1\"><i id=\"inpex\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-line-map-pin m-0 me-1\">\n\t\t\t\t\t\t</i></td><td id=\"izomi\" draggable=\"true\" data-highlightable=\"1\"><h5 id=\"ifznr\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0\">2/F Anflocor Building 411 Quirino Aveñue, corner NAIA Road, Barangay Tambo Parañaque City, Metro Manila\n\t\t\t\t\t\t</h5></td></tr><tr id=\"iozpx\" draggable=\"true\" data-highlightable=\"1\"><td id=\"i03ak\" draggable=\"true\" data-highlightable=\"1\" colspan=\"2\"> \n\t\t\t\t\t  </td></tr><tr id=\"ia1cj\" draggable=\"true\" data-highlightable=\"1\"><td id=\"iag9y\" draggable=\"true\" data-highlightable=\"1\"><i id=\"ia1kf\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-phone1 m-0 me-1\">\n\t\t\t\t\t\t</i></td><td id=\"igz76\" draggable=\"true\" data-highlightable=\"1\"><h6 id=\"irysp\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0\">(+63) (2) 8832-2404 \n\t\t\t\t\t\t  <br id=\"i78p4\" draggable=\"true\" data-highlightable=\"1\"/>(+63) (2) 8853-3988 \n\t\t\t\t\t\t  <br id=\"i6d22\" draggable=\"true\" data-highlightable=\"1\"/>(+63) (2) 8855-2741 to 47\n\t\t\t\t\t\t</h6></td></tr><tr id=\"imkem\" draggable=\"true\" data-highlightable=\"1\"><td id=\"ihmmh\" draggable=\"true\" data-highlightable=\"1\" colspan=\"2\"> \n\t\t\t\t\t  </td></tr><tr id=\"i5pst\" draggable=\"true\" data-highlightable=\"1\"><td id=\"iciiw\" draggable=\"true\" data-highlightable=\"1\"><i id=\"i9wty\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-clock2 m-0 me-1\">\n\t\t\t\t\t\t</i></td><td id=\"i0tk3\" draggable=\"true\" data-highlightable=\"1\"><h6 id=\"ioaqz\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0\">Monday – Thursday: 8:00AM – 6:00PM\n\t\t\t\t\t\t  <br id=\"iq13r\" draggable=\"true\" data-highlightable=\"1\"/>Friday: 8:00AM – 5:00PM\n\t\t\t\t\t\t</h6></td></tr></tbody></table></div>\n\t\t\t  {Media Accounts}\n\t\t\t  <br id=\"ij6mf\" draggable=\"true\" data-highlightable=\"1\"/><br id=\"i35sy\" draggable=\"true\" data-highlightable=\"1\"/></div><div id=\"im0vg\" draggable=\"true\" data-highlightable=\"1\" class=\"col-md-12 col-lg-4 col-sm-12\"><div id=\"i8yzj\" draggable=\"true\" data-highlightable=\"1\" class=\"mb-2 text-white\"><h5 id=\"ismbm\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0 text-white\">Ticketing Department\n\t\t\t\t\t</h5><small id=\"ikcll\" draggable=\"true\" data-highlightable=\"1\" class=\"text-white\">For ticketing and reservation inquiry:</small><table id=\"iawlb\" draggable=\"true\" data-highlightable=\"1\" class=\"table-responsive m-0\"><tbody id=\"ip7ed\" draggable=\"true\" data-highlightable=\"1\"><tr id=\"iovu5\" draggable=\"true\" data-highlightable=\"1\"><td id=\"ii3p8\" draggable=\"true\" data-highlightable=\"1\"><i id=\"ib5gh\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-envelope21 m-0 me-1\">\n\t\t\t\t\t\t\t</i></td><td id=\"ibklk\" draggable=\"true\" data-highlightable=\"1\"><a id=\"ijt3f\" draggable=\"true\" data-highlightable=\"1\" href=\"mailto:ticketing@houseoftravel.com.ph\" class=\"text-white text-decoration-underline\">ticketing@houseoftravel.com.ph</a></td></tr></tbody></table></div><div id=\"izono\" draggable=\"true\" data-highlightable=\"1\" class=\"mb-2 text-white\"><h5 id=\"ik5dp\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0 text-white\">Tours Department\n\t\t\t\t\t</h5><small id=\"ik38c\" draggable=\"true\" data-highlightable=\"1\" class=\"text-white\">For tour packages inquiry:</small><table id=\"it2pi\" draggable=\"true\" data-highlightable=\"1\" class=\"table-responsive m-0\"><tbody id=\"iff25\" draggable=\"true\" data-highlightable=\"1\"><tr id=\"i5ohp\" draggable=\"true\" data-highlightable=\"1\"><td id=\"imwvf\" draggable=\"true\" data-highlightable=\"1\"><i id=\"ivj09\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-envelope21 m-0 me-1\">\n\t\t\t\t\t\t\t</i></td><td id=\"iruvx\" draggable=\"true\" data-highlightable=\"1\"><a id=\"ichbn\" draggable=\"true\" data-highlightable=\"1\" href=\"mailto:tours@houseoftravel.com.ph\" class=\"text-white text-decoration-underline\">tours@houseoftravel.com.ph</a></td></tr></tbody></table></div><div id=\"iwaih\" draggable=\"true\" data-highlightable=\"1\" class=\"mb-2 text-white\"><h5 id=\"id8oa\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0 text-white\">Documentation Department\n\t\t\t\t\t</h5><small id=\"ixv6f\" draggable=\"true\" data-highlightable=\"1\">For passport, visa and other document concern:</small><table id=\"i9vkr\" draggable=\"true\" data-highlightable=\"1\" class=\"table-responsive m-0\"><tbody id=\"iwf7g\" draggable=\"true\" data-highlightable=\"1\"><tr id=\"ilzqd\" draggable=\"true\" data-highlightable=\"1\"><td id=\"iback\" draggable=\"true\" data-highlightable=\"1\"><i id=\"is88i\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-envelope21 m-0 me-1\">\n\t\t\t\t\t\t\t</i></td><td id=\"iwkb6\" draggable=\"true\" data-highlightable=\"1\"><a id=\"iq2lj\" draggable=\"true\" data-highlightable=\"1\" href=\"mailto:documentation@houseoftravel.com.ph\" class=\"text-white text-decoration-underline\">documentation@houseoftravel.com.ph</a></td></tr></tbody></table></div></div><div id=\"iaifs\" draggable=\"true\" data-highlightable=\"1\" class=\"col-md-12 col-lg-4 col-sm-12\"><div id=\"i81p7\" draggable=\"true\" data-highlightable=\"1\" class=\"mb-2 text-white\"><h5 id=\"ifhz9\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0 text-white\">Pearl Farm Manila Department\n\t\t\t\t\t</h5><small id=\"i4wol\" draggable=\"true\" data-highlightable=\"1\">For pearl farm reservation inquiry:</small><table id=\"idjjx\" draggable=\"true\" data-highlightable=\"1\" class=\"table-responsive m-0\"><tbody id=\"it0os\" draggable=\"true\" data-highlightable=\"1\"><tr id=\"ink37\" draggable=\"true\" data-highlightable=\"1\"><td id=\"ig49e\" draggable=\"true\" data-highlightable=\"1\"><i id=\"i806og\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-envelope21 m-0 me-1\">\n\t\t\t\t\t\t\t</i></td><td id=\"ikbbuo\" draggable=\"true\" data-highlightable=\"1\"><a id=\"ismtwg\" draggable=\"true\" data-highlightable=\"1\" href=\"mailto:pearlfarm@houseoftravel.com.ph\" class=\"text-white text-decoration-underline\">pearlfarm@houseoftravel.com.ph</a></td></tr></tbody></table></div><div id=\"ihg0lv\" draggable=\"true\" data-highlightable=\"1\" class=\"mb-2 text-white\"><h5 id=\"ieq4nl\" draggable=\"true\" data-highlightable=\"1\" class=\"m-0 text-white\">Technical Support Department\n\t\t\t\t\t</h5><small id=\"imbj0k\" draggable=\"true\" data-highlightable=\"1\" class=\"text-white\">For website technical issues concern:</small><table id=\"iicpq8\" draggable=\"true\" data-highlightable=\"1\" class=\"table-responsive m-0\"><tbody id=\"i80qym\" draggable=\"true\" data-highlightable=\"1\"><tr id=\"iqdx0t\" draggable=\"true\" data-highlightable=\"1\"><td id=\"i7ksx3\" draggable=\"true\" data-highlightable=\"1\"><i id=\"ifd2fw\" draggable=\"true\" data-highlightable=\"1\" class=\"bg-transparent i-small icon-envelope21 m-0 me-1\">\n\t\t\t\t\t\t\t</i></td><td id=\"ipuzup\" draggable=\"true\" data-highlightable=\"1\"><a id=\"iglj8q\" draggable=\"true\" data-highlightable=\"1\" href=\"mailto:support@houseoftravel.com.ph\" class=\"text-white text-decoration-underline\">support@houseoftravel.com.ph</a></td></tr></tbody></table></div></div></div></div></section><!-- Copyrights\n============================================= --><div id=\"copyrights\" draggable=\"true\" data-highlightable=\"1\"><div id=\"i4xn9t\" draggable=\"true\" data-highlightable=\"1\" class=\"container\"><div id=\"iswjil\" draggable=\"true\" data-highlightable=\"1\" class=\"row justify-content-between\"><div id=\"iq9mwh\" draggable=\"true\" data-highlightable=\"1\" class=\"col\"><span id=\"ing3xk\" draggable=\"true\" data-highlightable=\"1\" class=\"text-black-50\">© 2023 House of Travel, Inc.</span><a id=\"iwrref\" draggable=\"true\" data-highlightable=\"1\" href=\"https://beta.houseoftravel.com.ph/privacy-policy-2\" class=\"gjs-comp-selected\">&nbsp; Privacy Policy&nbsp;</a></div><div id=\"iolzho\" draggable=\"true\" data-highlightable=\"1\" class=\"col text-end\"><a id=\"ih72js\" draggable=\"true\" data-highlightable=\"1\" href=\"https://beta.houseoftravel.com.ph/\">Home</a>/\n\t\t  <a id=\"ie71qy\" draggable=\"true\" data-highlightable=\"1\" href=\"https://beta.houseoftravel.com.ph/about-us\">About</a>/\n\t\t  <a id=\"iov9rf\" draggable=\"true\" data-highlightable=\"1\" href=\"https://beta.houseoftravel.com.ph/services\">Services</a>/\n\t\t  <a id=\"iscxtz\" draggable=\"true\" data-highlightable=\"1\" href=\"https://beta.houseoftravel.com.ph/tour-packages\">Tour Packages</a>/\n\t\t  <a id=\"ij9ta8\" draggable=\"true\" data-highlightable=\"1\" href=\"https://beta.houseoftravel.com.ph/contact-us\">Contact Us</a></div></div></div></div><!-- #copyrights end --></footer><!-- #footer end -->",
                    "gjs-assets": "[]",
                    "gjs-styles": "[{\"selectors\":[],\"selectorsAdd\":\"*\",\"style\":{\"box-sizing\":\"border-box\"}},{\"selectors\":[],\"selectorsAdd\":\"body\",\"style\":{\"margin\":\"0\"}},{\"selectors\":[\"#iwrref\"],\"style\":{\"margin\":\"0 5px 0 5px\"}},{\"selectors\":[],\"selectorsAdd\":\"section:empty\",\"style\":{\"min-height\":\"40px\"}},{\"selectors\":[\"#iemunx\"],\"style\":{\"padding\":\"5px 5px 5px 5px\"}},{\"selectors\":[\"#i1i6is\"],\"style\":{\"max-width\":\"100%\",\"padding\":\"0 8.5% 0 8.5%\"}},{\"selectors\":[\"#iitz4f\"],\"style\":{\"padding\":\"5px 0 5px 0\",\"margin\":\"0 0 0 0\"}},{\"selectors\":[\"#ixv6f\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#id8oa\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#ik38c\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#ik5dp\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#ismbm\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#ikcll\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#ifhz9\"],\"style\":{\"color\":\"#ffffff\"}},{\"selectors\":[\"#i4wol\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#ieq4nl\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#imbj0k\"],\"style\":{\"color\":\"#eeeeee\"}},{\"selectors\":[\"#footer\"],\"style\":{\"color\":\"#ffffff\"}},{\"selectors\":[\"#is88i\"],\"style\":{\"color\":\"#ffffff\"}},{\"selectors\":[\"#ivj09\"],\"style\":{\"color\":\"#ffffff\"}},{\"selectors\":[\"#ifd2fw\"],\"style\":{\"color\":\"#ffffff\"}},{\"selectors\":[\"#i806og\"],\"style\":{\"color\":\"#ffffff\"}},{\"selectors\":[\"#ib5gh\"],\"style\":{\"color\":\"#ffffff\"}},{\"selectors\":[\"#i7ksx3\"],\"style\":{\"color\":\"#ffffff\"}}]",
                    "gjs-components": "[{\"tagName\":\"footer\",\"type\":\"default\",\"classes\":[\"border-0\",\"border-top\"],\"attributes\":{\"id\":\"footer\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"section\",\"attributes\":{\"id\":\"iemunx\"},\"components\":[{\"type\":\"container\",\"classes\":[\"container\"],\"attributes\":{\"id\":\"i1i6is\"},\"components\":[{\"type\":\"image\",\"attributes\":{\"id\":\"i97g\",\"draggable\":\"true\",\"src\":\"http://beta.houseoftravel.com.ph/theme/images/hoti-logo-white.png\"}},{\"type\":\"row\",\"classes\":[\"row\"],\"attributes\":{\"id\":\"iitz4f\"},\"components\":[{\"type\":\"column\",\"classes\":[\"dark\",\"col-lg-4\",\"col-md-12\",\"col-sm-12\"],\"attributes\":{\"id\":\"i9hpi\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"default\",\"classes\":[\"table-responsive\"],\"attributes\":{\"id\":\"iyu6m\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"table\",\"attributes\":{\"id\":\"izdyd\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"tbody\",\"attributes\":{\"id\":\"ijf7w\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"i765f\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"inf9q\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-line-map-pin\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"inpex\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"izomi\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h5\",\"type\":\"header\",\"classes\":[\"m-0\"],\"attributes\":{\"id\":\"ifznr\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"2/F Anflocor Building 411 Quirino Aveñue, corner NAIA Road, Barangay Tambo Parañaque City, Metro Manila\\n\\t\\t\\t\\t\\t\\t\"}]}]}]},{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"iozpx\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"i03ak\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"colspan\":\"2\"},\"components\":[{\"type\":\"textnode\",\"content\":\" \\n\\t\\t\\t\\t\\t  \"}]}]},{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"ia1cj\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"iag9y\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-phone1\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"ia1kf\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"igz76\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h6\",\"type\":\"header\",\"classes\":[\"m-0\"],\"attributes\":{\"id\":\"irysp\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"(+63) (2) 8832-2404 \\n\\t\\t\\t\\t\\t\\t  \"},{\"tagName\":\"br\",\"type\":\"default\",\"void\":true,\"attributes\":{\"id\":\"i78p4\",\"draggable\":\"true\",\"data-highlightable\":\"1\"}},{\"type\":\"textnode\",\"content\":\"(+63) (2) 8853-3988 \\n\\t\\t\\t\\t\\t\\t  \"},{\"tagName\":\"br\",\"type\":\"default\",\"void\":true,\"attributes\":{\"id\":\"i6d22\",\"draggable\":\"true\",\"data-highlightable\":\"1\"}},{\"type\":\"textnode\",\"content\":\"(+63) (2) 8855-2741 to 47\\n\\t\\t\\t\\t\\t\\t\"}]}]}]},{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"imkem\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"ihmmh\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"colspan\":\"2\"},\"components\":[{\"type\":\"textnode\",\"content\":\" \\n\\t\\t\\t\\t\\t  \"}]}]},{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"i5pst\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"iciiw\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-clock2\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"i9wty\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"i0tk3\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h6\",\"type\":\"header\",\"classes\":[\"m-0\"],\"attributes\":{\"id\":\"ioaqz\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Monday – Thursday: 8:00AM – 6:00PM\\n\\t\\t\\t\\t\\t\\t  \"},{\"tagName\":\"br\",\"type\":\"default\",\"void\":true,\"attributes\":{\"id\":\"iq13r\",\"draggable\":\"true\",\"data-highlightable\":\"1\"}},{\"type\":\"textnode\",\"content\":\"Friday: 8:00AM – 5:00PM\\n\\t\\t\\t\\t\\t\\t\"}]}]}]}]}]}]},{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t  {Media Accounts}\\n\\t\\t\\t  \"},{\"tagName\":\"br\",\"type\":\"default\",\"void\":true,\"attributes\":{\"id\":\"ij6mf\",\"draggable\":\"true\",\"data-highlightable\":\"1\"}},{\"tagName\":\"br\",\"type\":\"default\",\"void\":true,\"attributes\":{\"id\":\"i35sy\",\"draggable\":\"true\",\"data-highlightable\":\"1\"}}]},{\"type\":\"column\",\"classes\":[\"col-md-12\",\"col-lg-4\",\"col-sm-12\"],\"attributes\":{\"id\":\"im0vg\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"default\",\"classes\":[\"mb-2\",\"text-white\"],\"attributes\":{\"id\":\"i8yzj\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h5\",\"type\":\"header\",\"classes\":[\"m-0\",\"text-white\"],\"attributes\":{\"id\":\"ismbm\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Ticketing Department\\n\\t\\t\\t\\t\\t\"}]},{\"tagName\":\"small\",\"type\":\"text\",\"classes\":[\"text-white\"],\"attributes\":{\"id\":\"ikcll\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"For ticketing and reservation inquiry:\"}]},{\"type\":\"table\",\"classes\":[\"table-responsive\",\"m-0\"],\"attributes\":{\"id\":\"iawlb\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"tbody\",\"attributes\":{\"id\":\"ip7ed\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"iovu5\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"ii3p8\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-envelope21\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"ib5gh\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"ibklk\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"button\",\"classes\":[\"text-white\",\"text-decoration-underline\"],\"attributes\":{\"id\":\"ijt3f\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"mailto:ticketing@houseoftravel.com.ph\"},\"components\":[{\"type\":\"textnode\",\"content\":\"ticketing@houseoftravel.com.ph\"}]}]}]}]}]}]},{\"type\":\"default\",\"classes\":[\"mb-2\",\"text-white\"],\"attributes\":{\"id\":\"izono\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h5\",\"type\":\"header\",\"classes\":[\"m-0\",\"text-white\"],\"attributes\":{\"id\":\"ik5dp\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Tours Department\\n\\t\\t\\t\\t\\t\"}]},{\"tagName\":\"small\",\"type\":\"text\",\"classes\":[\"text-white\"],\"attributes\":{\"id\":\"ik38c\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"For tour packages inquiry:\"}]},{\"type\":\"table\",\"classes\":[\"table-responsive\",\"m-0\"],\"attributes\":{\"id\":\"it2pi\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"tbody\",\"attributes\":{\"id\":\"iff25\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"i5ohp\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"imwvf\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-envelope21\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"ivj09\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"iruvx\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"button\",\"classes\":[\"text-white\",\"text-decoration-underline\"],\"attributes\":{\"id\":\"ichbn\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"mailto:tours@houseoftravel.com.ph\"},\"components\":[{\"type\":\"textnode\",\"content\":\"tours@houseoftravel.com.ph\"}]}]}]}]}]}]},{\"type\":\"default\",\"classes\":[\"mb-2\",\"text-white\"],\"attributes\":{\"id\":\"iwaih\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h5\",\"type\":\"header\",\"classes\":[\"m-0\",\"text-white\"],\"attributes\":{\"id\":\"id8oa\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Documentation Department\\n\\t\\t\\t\\t\\t\"}]},{\"tagName\":\"small\",\"type\":\"text\",\"attributes\":{\"id\":\"ixv6f\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"For passport, visa and other document concern:\"}]},{\"type\":\"table\",\"classes\":[\"table-responsive\",\"m-0\"],\"attributes\":{\"id\":\"i9vkr\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"tbody\",\"attributes\":{\"id\":\"iwf7g\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"ilzqd\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"iback\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-envelope21\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"is88i\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"iwkb6\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"button\",\"content\":\"documentation@houseoftravel.com.ph\",\"classes\":[\"text-white\",\"text-decoration-underline\"],\"attributes\":{\"id\":\"iq2lj\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"mailto:documentation@houseoftravel.com.ph\"}}]}]}]}]}]}]},{\"type\":\"column\",\"classes\":[\"col-md-12\",\"col-lg-4\",\"col-sm-12\"],\"attributes\":{\"id\":\"iaifs\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"default\",\"classes\":[\"mb-2\",\"text-white\"],\"attributes\":{\"id\":\"i81p7\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h5\",\"type\":\"header\",\"classes\":[\"m-0\",\"text-white\"],\"attributes\":{\"id\":\"ifhz9\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Pearl Farm Manila Department\\n\\t\\t\\t\\t\\t\"}]},{\"tagName\":\"small\",\"type\":\"text\",\"attributes\":{\"id\":\"i4wol\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"For pearl farm reservation inquiry:\"}]},{\"type\":\"table\",\"classes\":[\"table-responsive\",\"m-0\"],\"attributes\":{\"id\":\"idjjx\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"tbody\",\"attributes\":{\"id\":\"it0os\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"ink37\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"ig49e\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-envelope21\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"i806og\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"ikbbuo\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"button\",\"classes\":[\"text-white\",\"text-decoration-underline\"],\"attributes\":{\"id\":\"ismtwg\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"mailto:pearlfarm@houseoftravel.com.ph\"},\"components\":[{\"type\":\"textnode\",\"content\":\"pearlfarm@houseoftravel.com.ph\"}]}]}]}]}]}]},{\"type\":\"default\",\"classes\":[\"mb-2\",\"text-white\"],\"attributes\":{\"id\":\"ihg0lv\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"h5\",\"type\":\"header\",\"classes\":[\"m-0\",\"text-white\"],\"attributes\":{\"id\":\"ieq4nl\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Technical Support Department\\n\\t\\t\\t\\t\\t\"}]},{\"tagName\":\"small\",\"type\":\"text\",\"classes\":[\"text-white\"],\"attributes\":{\"id\":\"imbj0k\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"For website technical issues concern:\"}]},{\"type\":\"table\",\"classes\":[\"table-responsive\",\"m-0\"],\"attributes\":{\"id\":\"iicpq8\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"tbody\",\"attributes\":{\"id\":\"i80qym\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"tr\",\"type\":\"default\",\"attributes\":{\"id\":\"iqdx0t\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"cell\",\"attributes\":{\"id\":\"i7ksx3\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"i\",\"type\":\"icon\",\"classes\":[\"bg-transparent\",\"i-small\",\"icon-envelope21\",\"m-0\",\"me-1\"],\"attributes\":{\"id\":\"ifd2fw\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"\\n\\t\\t\\t\\t\\t\\t\\t\"}]}]},{\"type\":\"cell\",\"attributes\":{\"id\":\"ipuzup\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"button\",\"classes\":[\"text-white\",\"text-decoration-underline\"],\"attributes\":{\"id\":\"iglj8q\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"mailto:support@houseoftravel.com.ph\"},\"components\":[{\"type\":\"textnode\",\"content\":\"support@houseoftravel.com.ph\"}]}]}]}]}]}]}]}]}]}]},{\"tagName\":\"NULL\",\"type\":\"comment\",\"content\":\" Copyrights\\n============================================= \"},{\"type\":\"default\",\"attributes\":{\"id\":\"copyrights\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"container\",\"classes\":[\"container\"],\"attributes\":{\"id\":\"i4xn9t\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"row\",\"classes\":[\"row\",\"justify-content-between\"],\"attributes\":{\"id\":\"iswjil\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"column\",\"classes\":[\"col\"],\"attributes\":{\"id\":\"iq9mwh\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"tagName\":\"span\",\"type\":\"text\",\"classes\":[\"text-black-50\"],\"attributes\":{\"id\":\"ing3xk\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"textnode\",\"content\":\"© 2023 House of Travel, Inc.\"}]},{\"type\":\"link\",\"content\":\"&nbsp; Privacy Policy&nbsp;\",\"classes\":[\"gjs-comp-selected\"],\"attributes\":{\"id\":\"iwrref\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"https://beta.houseoftravel.com.ph/privacy-policy-2\"}}]},{\"type\":\"column\",\"classes\":[\"col\",\"text-end\"],\"attributes\":{\"id\":\"iolzho\",\"draggable\":\"true\",\"data-highlightable\":\"1\"},\"components\":[{\"type\":\"button\",\"attributes\":{\"id\":\"ih72js\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"https://beta.houseoftravel.com.ph/\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Home\"}]},{\"type\":\"textnode\",\"content\":\"/\\n\\t\\t  \"},{\"type\":\"button\",\"attributes\":{\"id\":\"ie71qy\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"https://beta.houseoftravel.com.ph/about-us\"},\"components\":[{\"type\":\"textnode\",\"content\":\"About\"}]},{\"type\":\"textnode\",\"content\":\"/\\n\\t\\t  \"},{\"type\":\"button\",\"content\":\"Services\",\"attributes\":{\"id\":\"iov9rf\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"https://beta.houseoftravel.com.ph/services\"}},{\"type\":\"textnode\",\"content\":\"/\\n\\t\\t  \"},{\"type\":\"button\",\"attributes\":{\"id\":\"iscxtz\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"https://beta.houseoftravel.com.ph/tour-packages\"},\"components\":[{\"type\":\"textnode\",\"content\":\"Tour Packages\"}]},{\"type\":\"textnode\",\"content\":\"/\\n\\t\\t  \"},{\"type\":\"button\",\"content\":\"Contact Us\",\"attributes\":{\"id\":\"ij9ta8\",\"draggable\":\"true\",\"data-highlightable\":\"1\",\"href\":\"https://beta.houseoftravel.com.ph/contact-us\"}}]}]}]}]},{\"tagName\":\"NULL\",\"type\":\"comment\",\"content\":\" #copyrights end \"}]},{\"tagName\":\"NULL\",\"type\":\"comment\",\"content\":\" #footer end \"}]"
                }';

        $footerStyle = '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin:0;}#iwrref{margin:0 5px 0 5px;}section:empty{min-height:40px;}#iemunx{padding:5px 5px 5px 5px;}#i1i6is{max-width:100%;padding:0 8.5% 0 8.5%;}#iitz4f{padding:5px 0 5px 0;margin:0 0 0 0;}#ixv6f{color:#eeeeee;}#id8oa{color:#eeeeee;}#ik38c{color:#eeeeee;}#ik5dp{color:#eeeeee;}#ismbm{color:#eeeeee;}#ikcll{color:#eeeeee;}#ifhz9{color:#ffffff;}#i4wol{color:#eeeeee;}#ieq4nl{color:#eeeeee;}#imbj0k{color:#eeeeee;}#footer{color:#ffffff;}#is88i{color:#ffffff;}#ivj09{color:#ffffff;}#ifd2fw{color:#ffffff;}#i806og{color:#ffffff;}#ib5gh{color:#ffffff;}#i7ksx3{color:#ffffff;}#i81p7{color:#ffffff;}';
      
        $pages = [
            [
                'parent_page_id' => 0,
                'album_id' => 1,
                'slug' => 'home',
                'name' => 'Home',
                'label' => 'Home',
                'contents' => $homeHTML,
                'status' => 'PUBLISHED',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => 'Home',
                'meta_keyword' => 'home',
                'meta_description' => 'Home page',
                'user_id' => 1,
                'template' => 'home',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 2,
                'slug' => 'about-us',
                'name' => 'About',
                'label' => 'About',
                'contents' => $aboutHTML,
                'status' => 'PUBLISHED',
                'page_type' => 'standard',
                'image_url' => '',
                'meta_title' => 'About Us',
                'meta_keyword' => 'About Us',
                'meta_description' => 'About Us page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 2,
                'slug' => 'services',
                'name' => 'Services',
                'label' => 'Services',
                'contents' => $servicesHTML,
                'status' => 'PUBLISHED',
                'page_type' => 'standard',
                'image_url' => '',
                'meta_title' => 'Services',
                'meta_keyword' => 'Services',
                'meta_description' => 'Services page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 2,
                'slug' => 'tour-packages',
                'name' => 'Tour Packages',
                'label' => 'Tour Packages',
                'contents' => $tourpackagesHTML,
                'status' => 'PUBLISHED',
                'page_type' => 'standard',
                'image_url' => '',
                'meta_title' => 'Tour Packages',
                'meta_keyword' => 'Tour Packages',
                'meta_description' => 'Tour Packages page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 2,
                'slug' => 'contact-us',
                'name' => 'Contact Us',
                'label' => 'Contact Us',
                'contents' => $contactUsHTML,
                'status' => 'PUBLISHED',
                'page_type' => 'standard',
                'image_url' => '',
                'meta_title' => 'Contact Us',
                'meta_keyword' => 'Contact Us',
                'meta_description' => 'Contact Us page',
                'user_id' => 1,
                'template' => 'contact-us',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 2,
                'slug' => 'news',
                'name' => 'News and Updates',
                'label' => 'News and Updates',
                'contents' => '',
                'status' => 'PUBLISHED',
                'page_type' => 'customize',
                'image_url' => '',
                'meta_title' => 'News',
                'meta_keyword' => 'news',
                'meta_description' => 'News page',
                'user_id' => 1,
                'template' => 'news-list',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

         //Submenus
            
            //About submenus
            [
                'parent_page_id' => 0,
                'album_id' => 0,
                'slug' => 'company-profile',
                'name' => 'Company Profile',
                'label' => 'Company Profile',
                'contents' => '',
                'status' => 'PUBLISHED',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => 'Company Profile',
                'meta_keyword' => 'Company Profile',
                'meta_description' => 'Company Profile Page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 0,
                'slug' => 'awards',
                'name' => 'Awards',
                'label' => 'Awards',
                'contents' => '',
                'status' => 'PUBLISHED',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => 'Awards',
                'meta_keyword' => 'Awards',
                'meta_description' => 'Awards Page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

            //Services
            [
                'parent_page_id' => 0,
                'album_id' => 0,
                'slug' => 'ticketing-and-reservations',
                'name' => 'Ticketing and Reservations',
                'label' => 'Ticketing and Reservations',
                'contents' => '',
                'status' => 'PUBLISHED',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => 'Ticketing and Reservations',
                'meta_keyword' => 'Ticketing and Reservations',
                'meta_description' => 'Ticketing and Reservations Page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 0,
                'slug' => 'hotel-bookings-and-reservations',
                'name' => 'Hotel Bookings and Reservations',
                'label' => 'Hotel Bookings and Reservations',
                'contents' => '',
                'status' => 'PUBLISHED',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => 'Hotel Bookings and Reservations',
                'meta_keyword' => 'Hotel Bookings and Reservations',
                'meta_description' => 'Hotel Bookings and Reservations Page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 0,
                'slug' => 'passport-and-visa-processing',
                'name' => 'Passport and Visa Processing',
                'label' => 'Passport and Visa Processing',
                'contents' => '',
                'status' => 'PUBLISHED',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => 'Passport and Visa Processing',
                'meta_keyword' => 'Passport and Visa Processing',
                'meta_description' => 'Passport and Visa Processing Page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'parent_page_id' => 0,
                'album_id' => 0,
                'slug' => 'travel-insurance',
                'name' => 'Travel Insurance',
                'label' => 'Travel Insurance',
                'contents' => '',
                'status' => 'PUBLISHED',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => 'Travel Insurance',
                'meta_keyword' => 'Travel Insurance',
                'meta_description' => 'Travel Insurance Page',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
        ];

        DB::table('pages')->insert($pages);
        DB::table('pages')->insert(
            [
                'parent_page_id' => 0,
                'album_id' => 0,
                'slug' => 'footer',
                'name' => 'Footer',
                'label' => 'Footer',
                'contents' => $footerHTML,
                'json' => $footerJson,
                'styles' => $footerStyle,
                'status' => 'PUBLISHED',
                'page_type' => 'standard',
                'image_url' => '',
                'meta_title' => '',
                'meta_keyword' => '',
                'meta_description' => '',
                'user_id' => 1,
                'template' => '',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        );
    }
}
