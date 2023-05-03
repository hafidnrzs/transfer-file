#include <iostream>
using namespace std;

bool linearSearch(int, int, int[]);

int main() {
    int array[] = {1,5,6,9,2,8};
    int size;
    size = sizeof(array)/sizeof(array[0]);
    int k = 6;
    if (linearSearch(k, size, array))
        cout << "Ketemu";
    else
        cout << "Tidak ketemu";
    return 0;
}

bool linearSearch(int k, int s, int A[]) {
    bool found = false;
    int i;
    for (i = 0; i < s; i++) {
        if (A[i] == k)
            return true;
    }
    return 0;
}