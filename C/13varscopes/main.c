#include <stdio.h>

int result = 0; //Global Scope without {}, it's hard to debug

int add(int x, int y){
    int result = x + y;
    return result;
}

int kurang(int x, int y){ //if kurang() without int x/y, you can't call it!
    int result = x - y;
    return result;
}
//main func can't see another func
//that's why you can use result in other scope/{}
int main(){
    //scope is {}
    //local scope can't use the same variable
    //int result = 0;
    //int result = 1;

    //int result = add(3, 4);
    int result = kurang(3, 4);

    printf("%d", result);

    return 0;
}