#include <stdio.h>

int main(){
    int age = 0;
    
    printf("Enter your age: ");
    scanf("%d", age);

    if (age > 18){
        printf("You're an adult");
    }
    else if(age <= 18){
        printf("You're a teenager");
    }
    else if(age == 0){
        printf("You're newborn");
    }
    else{
        printf("You're not born yet");
    }
    return 0;
}