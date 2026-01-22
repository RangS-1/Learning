#include <stdio.h>
#include <stdbool.h>

int main(){
    int x = 76;
    int online = true;

    if (x > 75){
        printf("Mantap\n");
    }
    else if (x == 75){ //Gua kira pake ==, eh pake = doang juga bisa like, what the?
        printf("Wong pas-pasan\n");
    }
    else{
        printf("Sono pergi!\n");
    }

    if (online = true){
        printf("Lu online ngapain?");
    }
    else{
        printf("Lagi offline");
    }

    return 0;
}