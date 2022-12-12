function sumarray(array)
{
    var sum=0;
    for(var i=0;i<array.length;i++)
    {
        sum=sum+array[i];
    }
    return sum;
}

var a=new Array();
var n=prompt("Enter size of array: ");

for(var i=0;i<n;i++)
{
    a[i]=parseInt(prompt("Enter element "+i+1));
}
console.log(sumarray(a));
