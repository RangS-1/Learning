#include <stdio.h>
#include <stdbool.h>

void hello(char name[], int age);
bool student(int age);
//semisal lu punya function tapi di bawah main()!
//ya tinggal bikin function prototype seperti di atas
//tinggal masukin nama functionnya doang
//cuman ningkatin readability, organization dan prevent errors

int main(){
    hello("Rangga", 17);

    if(student(17)){
        printf("You are old enough!");
    }
    else{
        printf("Sorry, you can't");
    }
    return 0;
}

void hello(char name[], int age){
    printf("Your name is %s\n", name);
    printf("Your age is %d\n", age);
}

bool student(int age){
    if (age >= 18){
        return true;
    }
    else{
        return false;
    }

    //return age >= 18; just a shortcut version
}