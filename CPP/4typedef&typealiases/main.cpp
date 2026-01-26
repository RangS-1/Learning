#include <iostream>

//semisal lu bosen ketik const mulu
//lu bisa pake typedef buat gantiin const
//digunakan untuk membuat singkatan sebuah identifier (const, int, float, double, bool, std::string)
typedef const int c_t;
using a = std::string;

int main(){

    //kode aslinya const int PI = 3.14564;
    c_t PI = 3.14564;
    a nama = "Rangga Wijaya";

    std::cout << PI << std::endl;
    std::cout << nama << std::endl;
    
    return 0;
}