#include "header.h"

//Kasus3
int maxAB(int A, int B){
	int maks;
	if(A > B){
		maks = A;
	}
	else {
		maks = B;
	}
	return maks;
}

int max4(int A, int B, int C, int D){
	/*
	int maks;	
	maks = maxAB(maxAB(A,B),maxAB(C,D));
	return maks;
	*/
	return maxAB(maxAB(A,B),maxAB(C,D));
}

//Kasus 3a
int pangkat2(int x){
	int y;
	y = x * x;
	return y;
}

int pangkat3(int x){
	int z;
	z = pangkat2(x) * x;
	return z;
}

float fahrenheit(float celcius){
	float result;
	result = celcius * (180.0 / 100.0) + 32;
	return result;
}

float celcius(float x){
	float result;
	result = (fahrenheit(x) - 32) * (100.0 / 180.0);
	return result;	
}