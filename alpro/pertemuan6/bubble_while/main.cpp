#include<iostream>
using namespace std;

void BubbleSort(int[],int);

int main(){
	int arr[] = {3,2,4,1,6};
	int size = sizeof(arr) / sizeof(arr[0]);
	BubbleSort(arr, size);
	return 0;
}

void BubbleSort(int A[], int s) {
	int i, j, temp;
	bool tukar;

	cout << "Unsorted array:\n";
	for (int i = 0; i < s; i++) {
		cout << A[i] << " ";
	}
	cout << "\n";
	
	tukar = false;
	while(!tukar) {
		tukar = true;
		for (j = 0; j < s - 1; j++) {
			if (A[j] > A[j + 1]) {
				tukar = false;
				temp = A[j + 1];
				A[j + 1] = A[j];
				A[j] = temp;
			}
		}
	}

	cout << "\nSorted array:\n";
	for (int i = 0; i < s; i++) {
		cout << A[i] << " ";
	}
}
