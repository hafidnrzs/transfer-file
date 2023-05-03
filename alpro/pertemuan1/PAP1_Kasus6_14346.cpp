#include<iostream>
using namespace std;

int main(){
	cout << "Kasus 6 - Parking" << endl;
	string tipeKendaraan;
	int jam, biayaParkir;
	cout << "Input tipe kendaraan: ";
	getline(cin, tipeKendaraan);
	cout << "Input jam: ";
	cin >> jam;

	if(tipeKendaraan=="Sepeda Motor" || tipeKendaraan=="Sepeda Listrik" || tipeKendaraan=="Tossa" || tipeKendaraan=="Sepeda"){
		biayaParkir = 3000 * jam;
		if(jam > 12){
			biayaParkir += 50000;
		}
	} else if(tipeKendaraan=="Mobil"){
		biayaParkir = 5000 * jam;
		if(jam > 12){
			biayaParkir += 75000;
		}
	} else if(tipeKendaraan=="MiniTruck"|| tipeKendaraan=="Truck" || tipeKendaraan=="Mini Bus" || tipeKendaraan=="Bus"){
		biayaParkir = 25000 * jam;
		if(jam > 8){
			biayaParkir += 250000;
		}
	} else {
		cout << "Tipe Kendaraan tidak valid";
		return 0;
	}
	cout << "Biaya parkir: " << biayaParkir;
	return 0;
}