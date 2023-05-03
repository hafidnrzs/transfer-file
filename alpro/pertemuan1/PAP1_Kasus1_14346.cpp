#include<iostream>
using namespace std;

int main(){
	int N, a;
	cout << "Kasus 1 - Deret Angka" << endl;
	cout << "Input N: ";
	cin >> N;
	cout << "Input a: ";
	cin >> a;
	for(int i=a; i<=N; i++){
		cout << i << " ";
	}
	return 0;
}