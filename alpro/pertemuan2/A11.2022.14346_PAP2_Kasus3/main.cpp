#include "header.h"

int main(){
	int result, a, b, c, d;

	cout << "Bilangan Terbesar dari 4 Bilangan" << endl;
	cout << "Input A: "; cin >> a;
	cout << "Input B: "; cin >> b;
	cout << "Input C: "; cin >> c;
	cout << "Input D: "; cin >> d;
	result = max4(a,b,c,d);
	cout << result << endl;

	int x;
	cout << endl;
	cout << "Fungsi Pangkat 2 & 3" << endl;
	cout << "Input nilai x: "; cin >> x;
	cout << "Pangkat 2 dari " << x << " : " << pangkat2(x) << endl;
	cout << "Pangkat 3 dari " << x << " : " << pangkat3(x) << endl;

	
	float cel, fah, hasilCelcius;
	cout << endl;
	cout << "Fungsi Fahrenheit" << endl;
	cout << "Input temperatur dalam Celcius: "; cin >> cel;
	fah = fahrenheit(cel);
	cout << "Temperatur dalam Fahrenheit: " << fah << endl;
	
	cout << endl;
	cout << "Fungsi Celcius" << endl;
	hasilCelcius = celcius(cel);
	cout << "Temperatur dalam Celcius: " << hasilCelcius << endl;
	return 0;
}