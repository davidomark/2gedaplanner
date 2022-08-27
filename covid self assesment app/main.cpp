#include <iostream>
#include <fstream>
#include <string>

using namespace std;
string myText;


string FullName, FName, LName, city;
int ans, ans1, ans2, ans3, ans4, ans5, ansx, ansy, age, st;


 void quest3()
 {
     cout<< "Do you have loss of conciousness?" << endl;
     cin>> ans5 ;
     ansy = ansx + ans5;
     if (ansy >= 3)
     {
         cout<< "There is a potential for the presence of Covid"<<endl;
     } else {
        cout<< "You have don't have Covid"<<endl;
     }
 }
void quest2()
{
    cout<< "Do you have feelings of confusion?" << endl;
    cin>> ans4 ;
    ansx = ans4 + ans;
    if (ansx >= 3)
    {
        cout<< "There is a potential for the presence of Covid"<<endl;
    }else if(ansx < 2) {
        cout<< "You have don't have Covid"<<endl;
    }
    else{
        quest3();
    }
}


void quest1()
{
    cout<< "Do you have severe difficulty breathing?" << endl;
    cin>> ans1 ;
    cout<< "Do you have severe chest pain?" << endl;
    cin>> ans2 ;
    cout<< "Do you have a very hard time waking up?"<< endl;
    cin>> ans3 ;
    ans = ans1 + ans2 + ans3;
    if (ans >= 3){
        cout<< "There is a potential for the presence of Covid"<<endl;
    }else if(ans < 1){
        cout<<"You have don't have Covid"<<endl;
    }
    else {
        quest2();
    }
}


void asses()
{
    cout<<""<<endl;
    cout<<"Please enter the following information:"<<endl;
    cout<<""<<endl;
    cout<< "Your First Name" << endl;
    cin>> FName;
    cout<< "Your Last Name" << endl;
    cin>> LName;
    FullName = FName+" "+ LName;
    cout<<"Your Age"<<endl;
    cin>>age;
    cout<<"Your city of residence"<<endl;
    cin>>city;
    cout<<""<<endl;
    cout<< "Answer The Following Questions with a '1' for 'yes' and '0' for 'no' "<< endl;
    quest1();

}
void rite()
{

    ofstream file("test.txt");
    file << FullName <<endl;
    file<<"Age:"<<endl;
    file<<age<<endl;
    file<<"City of residence: "<<endl;
    file<<city<<endl;
    file<<""<<endl;
    file << "Questions and Answers"<<endl;
    file<< "Answer The Following Questions with a '1' for 'yes' and '0' for 'no' "<<endl;
    file<< "Do you have severe breathing?"<<endl;
    file<< ans1 <<endl;
    file<< "Do you have severe chest pain?"<<endl;
    file<< ans2 <<endl;
    file<< "Do you have a very have time waking up?" <<endl;
    file<< ans3 <<endl;
    file<< "Do you have feelings of confusion?"<<endl;
    file<< ans4 <<endl;
    file<< "Do you have loss of conciousness?"<<endl;
    file<< ans5 <<endl;




    file.close();
}
void reed()
{
        ifstream file("test.txt");


       while(getline(file, myText)){
            cout << myText;
        }
        file.close();
}

int main()
{
    cout<<"GHANA CHRISTIAN UNIVERSITY TEACHING HOSPITAL, AMRAHIA, GHANA"<<endl;
    cout<<"........................................................................"<<endl;
    cout<<"COVID SELF ASSESMENT APPLICATION"<<endl;
    cout<<"NOTE: This app is only used to make predictions about your covid status."<<endl;
    cout<<"Please see the doctor after this test."<<endl;
    cout<<"....................................................................."<<endl;
    cout<<"Do you wish to start? Enter '1' to start"<<endl;
    cin>> st;
    cout<<"........................................................................"<<endl;
    cout<<"Please use an underscore'_' instead of space."<<endl;
    if (st==1){
        asses();
    }else{
        return 0;
    }
    cout<<FullName;
    rite();
    reed();
    return 0;
}
