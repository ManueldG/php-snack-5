<?
/*
Prendere un testo abbastanza lungo, contenente diverse frasi.
Suddividere il testo in tanti paragrafi <p>.
Ad ogni punto (.) corrisponde un nuovo paragrafo.
*/

$paragrafo="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget tempus dolor. Nulla tortor lacus, luctus vitae malesuada in, consectetur dapibus arcu. Nam sodales lorem vel metus vehicula, quis placerat purus congue. Curabitur ultricies nulla vitae libero sollicitudin ultrices. Cras efficitur suscipit elementum. Nullam nec vestibulum velit. Vestibulum ornare lectus dui, vitae sodales urna consequat vel. Suspendisse potenti. Ut id ipsum non nisi lacinia dignissim vel sodales est. Aenean iaculis ante justo. Mauris tempor, turpis at mollis pellentesque, justo ante euismod metus, non egestas arcu nulla non risus.

Donec eget sagittis magna, id rhoncus sapien. Phasellus sed aliquet sem, vitae pellentesque risus. Integer in ex eget lorem suscipit elementum. Proin arcu orci, lacinia semper gravida ac, ultricies malesuada arcu. Integer faucibus justo sed ligula efficitur, eget dapibus arcu finibus. Curabitur consectetur ultricies dui sit amet iaculis. Aliquam tristique volutpat lacus et auctor. Sed quis enim justo. Cras finibus dictum lorem vitae mattis. Phasellus a sollicitudin nulla, nec finibus ex.

In hac habitasse platea dictumst. Nam bibendum congue dui. Suspendisse euismod enim ante, et tempus arcu sollicitudin cursus. Nulla vestibulum a tortor ut tincidunt. Donec faucibus sit amet ligula non lacinia. In rhoncus velit ullamcorper purus fermentum, vitae porta urna vehicula. Curabitur congue magna vel fermentum convallis. Donec fermentum urna nisi, aliquam blandit lectus iaculis ut. Aenean lobortis pellentesque laoreet. Aenean sed odio in tortor convallis vehicula. Phasellus suscipit leo quis nisi ultrices, non sagittis ex mattis. Sed arcu urna, molestie eget hendrerit eu, ultrices quis dui.

Quisque ac risus vel diam commodo auctor a sed nibh. Curabitur vel congue lectus, ac faucibus neque. Maecenas tempus lobortis erat sit amet hendrerit. Etiam ut vulputate purus. Phasellus pharetra turpis orci, id facilisis tellus ullamcorper commodo. Aliquam at facilisis sapien. Curabitur tincidunt ex vel accumsan cursus. Donec porta cursus nulla at dictum. Donec dapibus turpis lectus, et elementum dui consequat sit amet. Sed ut nulla mauris. In id elementum elit. Nullam laoreet tempus neque, eget semper nisl condimentum ut. Cras varius quam sed elementum dignissim. Quisque id nisi in tellus molestie suscipit sed in diam.

Integer sit amet felis lacus. Donec faucibus vestibulum ornare. Fusce magna urna, tincidunt nec aliquam eget, pulvinar posuere est. Nulla mi tortor, sollicitudin ac posuere vel, efficitur non ipsum. Maecenas volutpat dolor quis neque ultricies fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra est sit amet ante facilisis, ac vehicula nulla lacinia. Praesent vitae molestie mi. Proin ullamcorper vitae tortor et luctus. Mauris euismod vitae justo porta porttitor. Donec ut elit diam. Quisque finibus id leo nec laoreet. Suspendisse ut fringilla diam. Sed vitae libero at lorem imperdiet iaculis.

Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc sed volutpat nisl. Ut mattis nulla sem, eget auctor eros fermentum ut. Aenean lobortis, ipsum eget rhoncus eleifend, nulla lectus efficitur nisl, convallis volutpat sem nulla nec sapien. Vestibulum convallis luctus justo sit amet volutpat. Sed sed nisi ac enim aliquet imperdiet vitae nec orci. Maecenas sem sem, dictum non elit sed, consequat posuere magna.

Etiam tempor dui vitae tellus sodales, sed convallis est aliquet. Maecenas vehicula sagittis bibendum. Nullam dapibus, erat id gravida venenatis, nulla dolor condimentum massa, eu consequat odio nulla et est. Morbi maximus, felis aliquet condimentum fermentum, magna leo imperdiet ante, in blandit augue erat non dolor. Vestibulum eu lobortis quam. Suspendisse a elementum libero. In placerat malesuada purus a semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis eget sodales enim. Ut auctor congue mattis. Vivamus volutpat est eget mi blandit ullamcorper. Quisque rhoncus condimentum pulvinar. Etiam suscipit eros ac magna aliquet porttitor. Nullam eu sagittis dolor. Donec sed nisl tempus, vehicula leo et, pharetra enim.

Phasellus sagittis turpis purus, quis fringilla est sagittis nec. Sed porttitor magna et imperdiet varius. Quisque ultricies est nec erat vehicula elementum. Curabitur vel consequat ligula, congue ultrices nisi. Fusce placerat orci dui, at finibus magna tincidunt nec. Donec et volutpat lacus. Aliquam erat volutpat. Maecenas at vestibulum tellus.

Duis egestas odio sed ex commodo hendrerit. Praesent at ligula ut diam convallis facilisis in ac est. Aliquam facilisis tellus sed libero consectetur, et vehicula sem pharetra. Vestibulum eleifend augue felis, non aliquam tortor ultrices ac. Phasellus laoreet nulla sapien, quis molestie libero hendrerit at. Quisque eget congue lorem. Sed volutpat eleifend libero vel aliquet. Duis aliquet fermentum malesuada. Donec sodales nunc nec bibendum sollicitudin. Cras nec laoreet lacus. Pellentesque sollicitudin sapien lorem, vel accumsan arcu maximus quis. Nulla accumsan maximus venenatis.

Sed non nibh mollis, iaculis nunc venenatis, fermentum leo. Duis nec orci non nibh gravida mattis. Aenean ornare tempor faucibus. Nam vel sem consectetur, tincidunt risus non, interdum turpis. Curabitur pellentesque vehicula ante, eget hendrerit augue placerat vitae. Sed non lorem placerat, hendrerit nibh eget, tincidunt mauris. Nulla volutpat neque quis purus interdum molestie. In porta ut nibh quis condimentum.";

$array = explode(".",$paragrafo);

var_dump($array);

foreach($array as $par)
    echo("<p>$par</p>\n");
?>