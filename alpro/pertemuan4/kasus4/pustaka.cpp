#include "header.h"

void guessNumber(){
	int tebakAngka;
	//looping
	cout << "input prediksimu: "; cin >> tebakAngka;
	//cout << tebakAngka;
	int secretNumber;
	srand(time(0));
	secretNumber = rand() % 10 + 1;
	if(tebakAngka < secretNumber){
		cout << "angka tebakan terlalu kecil" << endl;
	}
	else if(tebakAngka > secretNumber){
		cout << "angka tebakan terlalu besar" << endl;
	}
	else{
		cout << "angka tebakan benar" << endl;
		cout << "angka tebakan: " << secretNumber << endl;
	}
}