#include<iostream>
using namespace std;

int main(){
	int a, b;
	cout << "Kasus 2 - Deret Angka - Menurun" << endl;
	cout << "Input a: ";
	cin >> a;
	cout << "Input b: ";
	cin >> b;
	for(int i=b; i>=a; i--){
		cout << i << " ";
	}
	return 0;
}