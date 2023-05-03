#include "header.h"

void matchNumber(){
	cout << "Program Match Number" << endl;
	cout << "Rule:" << endl;
	cout << "1. Pemain memasukkan 5 angka tebakan" << endl;
	cout << "2. Program akan menjumlahkan 5 angka tersebut." << endl;
	cout << "3. Jika hasil penjumlahan sesuai dengan angka yang disimpan, pemain menang" << endl;
	
	int x;
	int guessNumber = 2;
	int predict = 0;

	for(int i=0; i<5; i++){
		cout << "Input angka: "; cin >> x;
		predict += x;
	}
	if(guessNumber == predict){
		cout << "Selamat, tebakanmu benar!!" << endl;
	}else{
		cout << "Maaf, tebakanmu masih kurang tepat!!" << endl;
	}
	
	cout << "Angka tebakanmu: " << predict << endl;
	cout << "Angka yang disimpan: " << guessNumber << endl;
}