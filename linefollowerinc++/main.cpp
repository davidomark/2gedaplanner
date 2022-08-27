#include <iostream>

using namespace std;

// PIN DEFINITIONS: pinLA= left photosensor, pinLB= right photosensor, pinDS=distance sensor, ms= motor status, pinWS= weight sensor,
//pinSS= Speaker/siren, pA= point A, pB= point B, travtime= travel time,



int pinLA, pinLB, direction, pinDS, ms, pinWS, pinSS, pA;
float pB, travtime;


// for photosensors '0' is a black line and '1' is anything other than black
//left = 1, right = 2 and straight = 3 are movement directions of the motor
void photosensors()
{

    cin>>pinLA;
    cin>>pinLB;

    if (pinLA==1&&pinLB==1){
        direction = 3;
        cout<<direction;
    }else if (pinLA==0&&pinLB==1){
        direction = 1;
        cout<<direction;
    }else if(pinLA==1&&pinLB==0){
        direction = 2;
        cout<<direction;
    }else{
        cout<<"Please re-align the robot"<<endl;
        photosensors();
    }

}

//for the distance sensor, if the distance between the robot and a barrier is '5 meters', the motor should stop.
void distsensor()
{
    cin>>pinDS;
    if(pinDS<=5){
        //ms is the motor status, where ms is '1' the motor should move and where ms is '0' the motor should not move.
        ms = 0;
        cout<<ms;
        cout<<"There is a barrier, please clear the path."<<endl;
        distsensor();
    }
    else{
        ms = 1;
        cout<<ms;
    }
}

//for the weight sensor, if the weight on the robot is more than '100kg', the siren should beep three times.
//value of siren = to number of beeps

void weight()
{
    cin>>pinWS;
    if(pinWS>100){
        pinSS = 3;
        cout<<pinSS;
        cout<<"Please reduce the load"<<endl;
        weight();
    } else{
       pinSS = 0;
       ms = 1;
        cout<<pinSS;
        cout<<ms;
    }
}

void siren()
{
    weight();
    cout<<pinSS;
}

//the motor should stop when the travel is complete
void motors()
{
    weight();
    distsensor();
    photosensors();
    for (float i=0; i<=travtime; i++)
    {
        cout<<i<<endl;
    }
}

//since the speed is 10m/min, if the travel distance is pB then time of travel= pB/10
void travel()
{

    pA=0;
    cin>>pB;
    travtime= pB/10;
    cout<<travtime;
    cout<<"The robot will travel for travel time with the stated distance in meters"<<endl;
    motors();
}

int main()
{
    cout << "Welcome to The line follower simulation" << endl;

    travel();

    return 0;
}
