#include <stdio.h>
#include <stdbool.h>

int main(){
    float price = 10.00;
    bool student = true;
    bool senior = true;

    if(student){
        if(senior){
            printf("You get a student discount 10%\n");
            printf("You get a senior discount 20%\n");
            price *= 0.7; //30% discount
        }
        else{
            printf("You get a student discount 10%\n");
            price *= 0.9; //10% discount
        }
    }
    else{
        if(senior){
            printf("You get a senior discount 20%\n");
            price *= 0.8;
        }
    }

    printf("The price of a ticket is: $%.2f\n", price);
    
    return 0; 
}