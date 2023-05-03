#include<iostream>
using namespace std;

int pangkat(int);

int main(){
	cout << pangkat(5) << endl;
	cout << pangkat(6) << endl;
	cout << pangkat(7) << endl;
	return 0;
}

int pangkat(int x){
	int hasil;
	hasil = x * x;
	return hasil;
}