#include <stdio.h>
#include <stdbool.h>

int main(){
    int temp = 20;
    int payed = 10;
    bool online = true;

    if(temp > 0 && temp < 30){ //say no to so many else if!
        printf("Good\n");
    }
    else if(temp == 0){
        printf("%d\n", temp);
    }
    else if(temp < 0 && temp > -30){
        printf("BAD\n");
    }

    if(payed == 10 || payed == 20){ 
        printf("everything is %d\n", payed);
    }
    else{
        printf("Hmm, we don't have return! sorry,\nhere's your $%d\n", payed);
    }
    
    if(online != true){
        printf("He's not online");
    }
    else{
        printf("He's online");
    }
    return 0;
}