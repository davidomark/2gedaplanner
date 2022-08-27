#include <iostream>
#include <windows.h>
#include <cmath>
using namespace std;

void addition()
{
    cout<<"                "<<endl;
    cout<<"You choose addition"<<endl;
    int num1, num2, add;
    cout <<"Input First Number:"<<endl;
    cin>>num1;
    cout<< "Input Second Number:"<<endl;
    cin>>num2;
    add = num1 + num2;
    cout <<num1<<" + "<<num2<<" = "<<add<<endl;

}

void subtraction ()
{
    cout<<"           "<<endl;
    cout<<"You choose subtraction"<<endl;
    int num1, num2, subtract;
    cout <<"Input First Number:"<<endl;
    cin>>num1;
    cout<< "Input Second Number:"<<endl;
    cin>>num2;
    subtract = num1 - num2;
    cout <<num1<<" - "<<num2<<" = "<<subtract<<endl;


}

void multiplication()
{
    cout<<"           "<<endl;
    cout<<"You choose multiplication"<<endl;
    int num1, num2, multiply;
    cout <<"Input First Number:"<<endl;
    cin>>num1;
    cout<< "Input Second Number:"<<endl;
    cin>>num2;
    multiply = num1 * num2;
    cout <<num1<<" * "<<num2<<" = "<<multiply<<endl;
}


void division()
{
    cout<<"           "<<endl;
    cout<<"You choose division"<<endl;
    int num1, num2, divide;
    cout <<"Input First Number:"<<endl;
    cin>>num1;
    cout<< "Input Second Number:"<<endl;
    cin>>num2;
    divide = num1 / num2;
    cout <<num1<<" / "<<num2<<" = "<<divide<<endl;
}

void squareRoot()
{
    cout<<"           "<<endl;
    cout<<"You choose square root"<<endl;
    int num1;
    float squareRoot;
    cout <<"Input Number:"<<endl;
    cin>>num1;

    squareRoot = sqrt(num1);
    cout <<"The square root of "<<num1<<" is "<<squareRoot<<endl;
}

void power()
{
    cout<<"           "<<endl;
    cout<<"You choose Exponentiation"<<endl;
    int num1, num2, power;
    cout <<"Input Number:"<<endl;
    cin>>num1;
    cout<<"Input power"<<endl;
    cin>>num2;

    power = pow(num1, num2);
    cout <<num1<<"raised to the power "<<num2<<" is "<<power<<endl;
}
int option;


int main()
{

    cout <<"THIS CALCULATOR WORKS WITH ONLY TWO NUMBERS"<<endl;
    cout <<"     "<<endl;
    cout << "Menu" << endl;
    cout <<"Option 1- Addition"<<endl;
    cout <<"Option 2- Subtraction"<<endl;
    cout <<"Option 3- Multiplication"<<endl;
    cout <<"Option 4- Division"<<endl;
    cout<<"Option 5- Square root"<<endl;
    cout<<"Option 6- Exponentiation"<<endl;
    cout <<"Option 7- Quit"<<endl;
    cin>>option;

    if (option == 1) {
        system("cls");
       addition();
       system("pause");
        system("cls");
        main();
    }
    if (option == 2){
        system("cls");
        subtraction();
        system("pause");
         system("cls");
        main();
    }
      if (option == 3){
        system("cls");
        multiplication();
        system("pause");
         system("cls");
        main();
    }
      if (option == 4){
        system("cls");
        division();
        system("pause");
         system("cls");
        main();
    }
     if (option == 5){
        system("cls");
        squareRoot();
        system("pause");
         system("cls");
        main();
    }
     if (option == 6){
        system("cls");
        power();
        system("pause");
         system("cls");
        main();
    }

    if (option == 7){
        return 0;
    }
    else{
        cout<<"incorrect option"<<endl;
        system("pause");
         system("cls");
        main();
    }
}
