#include<iostream>
using namespace std;

int main(){
	cout << "Kasus 4 - Penjumlahan Deret" << endl;	
	int jumlah = 0;
	int N;
	cout << "Input N: ";
	cin >> N;
	for(int i=1; i<=N; i++){
		cout << i << " ";
		jumlah += i;
	}
	cout << endl;
	cout << "Hasil penjumlahan: " << jumlah;
	return 0;
}