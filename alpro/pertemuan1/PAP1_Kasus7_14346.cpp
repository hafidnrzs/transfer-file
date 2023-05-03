#include<iostream>
using namespace std;

int main(){
	int N;
	cout << "Input n: ";
	cin >> N;
	
	int array[N];
	for(int i=0; i<N; i++){
		cout << "Input ke-" << i+1 << ": ";
		cin >> array[i];
	}
	cout << "Hasil Array: ";
	for (int i=0; i<N; i++){
		cout << array[i] << " ";
	}
	return 0;
}