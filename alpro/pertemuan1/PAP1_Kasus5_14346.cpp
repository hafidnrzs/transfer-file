#include<iostream>
using namespace std;

int main(){
	cout << "Kasus 5 - Program Konversi Nilai" << endl;	
	int nilai;
	cout << "Input nilai: ";
	cin >> nilai;
	if(nilai >= 85){
		cout << "Nilai Huruf: A";
	} else if(nilai >= 80){
		cout << "Nilai Huruf: AB";
	} else if(nilai >= 70){
		cout << "Nilai Huruf: B";
	} else if(nilai >= 65){
		cout << "Nilai Huruf: BC";
	} else if(nilai >= 60){
		cout << "Nilai Huruf: C";
	} else if(nilai >= 50){
		cout << "Nilai Huruf: D";
	} else if(nilai >= 0){
		cout << "Nilai Huruf: E";
	} else {
		cout << "Input tidak valid";
	}
	return 0;
}