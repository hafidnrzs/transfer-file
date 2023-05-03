#include<iostream>
using namespace std;

int main(){
	int a, b, steps;
	cout << "Kasus 3 - Modifikasi Program" << endl;
	cout << "Input a: ";
	cin >> a;
	cout << "Input b: ";
	cin >> b;
	cout << "Input increment value: ";
	cin >> steps;
	for(int i=a; i<=b; i+=steps){
		cout << i << " ";
	}
	return 0;
}