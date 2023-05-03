#include "header.h"

// list fungsi
int pangkat(int x){
	int hasil;
	hasil = x * x;

	return hasil;
}

int pangkat3(int x){
	int hasil;
	hasil = pangkat(x) * x;

	return hasil;
}