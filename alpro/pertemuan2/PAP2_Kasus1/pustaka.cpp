#include "header.h"

// list fungsi
int luas_persegi(int sisi){
	int hasil;
	hasil = sisi * sisi;
	return hasil;
}

int is_besar(int n){
	int terbesar = 1;
	for(int i=1; i<=n; i++){
		cout << i << " ";
		if(terbesar <= i){
			terbesar = i;
		}
	}
	cout << endl;
	return terbesar;
}

int is_kecil(int n){
	int terkecil = 1;
	for(int i=1; i<=n; i++){
		cout << i << " ";
		if(terkecil>= i){
			terkecil = i;
		}
	}
	cout << endl;
	return terkecil;
}

bool is_ganjil(int n){
	if(n % 2 != 0){
		return true;
	} else {
		return false;
	}
}

bool is_genap(int n){
	if(n % 2 == 0){
		return true;
	} else {
		return false;
	}
}

int ToPositive(int n){
	int hasil;
	hasil = n;
	if(n < 1){
		hasil = hasil * -1;
	}
	return hasil;
}


int ToNegative(int n){
	int hasil;
	hasil = n;
	if(n > 1){
		hasil = hasil * -1;
	}
	return hasil;
}

int sum_n(int n){
	int sum;
	sum = 0;
	for(int i=1; i<=n; i++){
		cout << i << " ";
		sum = sum + i;
	}
	cout << endl;
	return sum;
}

float avg_n(int n){
	float average;
	average = sum_n(n) / n;
	return average;
}