#include "header.h"

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

//prosedur
void BesarAB(int A, int B){
	int maks;
	if(A > B){
		maks = A;
	}
	else {
		maks = B;
	}
	cout << maks << endl;
}