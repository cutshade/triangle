# Triangle
boxmark test project
Zadatak:

·         kreirati Symfony projekt (verzija 5.x)

·         u tom projektu kreirati entity Triangle

·         unutar projekta kreirati sqlite bazu podataka

·         Triangle entity-e pohranjivati u triangles tabelu unutar te baze

·         za pohranu koristiti DoctrineBundle za Symfony

·         kreirati rutu [POST] /triangle/{a}/{b}/{c} koja sprema Triangle entity u bazu

·         unutar Triangle entity-a kreirati dvije metode (za izračun površine i za izračun opsega)

·         kreirati servis GeometryCalculator koji će preko rute [GET] /triangles
vraćati zbroj površina i zbroj opsega svih pohranjenih Triangle objekata.
Ta ruta mora vraćati JSON u sljedećem obliku, npr:
{

“number_of_triangles”: 7

"total_surface": 12.0,

"total_circumference": 24.0

}

·         kreirati git repozitorij na svom korisničkom računu na GitHub-u za taj projekt
