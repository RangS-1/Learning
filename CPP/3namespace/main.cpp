#include <iostream>

//namespace biasa digunakan untuk atasi konflik nama var yang sama
//misal int x = 0; , int x = 1;
namespace first{
    int x = 1;
}

namespace second{
    int x = 2;
}

int main(){
    int x = 0;

    std::cout << x << std::endl;
    
    return 0;
}