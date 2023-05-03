#include "header.h"

int main(){
	int n;
	cout << "Masukkan bilangan bulat: ";
	cin >> n;

	cout << "Luas persegi: " << luas_persegi(n) << endl;
	cout << is_besar(n) << endl;
	cout << is_kecil(n) << endl;
	cout << "Bilangan " << n << " merupakan bilangan ganjil: " << is_ganjil(n) << endl;
	cout << "Bilangan " << n << " merupakan bilangan genap: " << is_genap(n) << endl;
	cout << ToPositive(n) << endl;
	cout << ToNegative(n) << endl;
	cout << sum_n(n) << endl;
	cout << avg_n(n) << endl;
	return 0;
}