using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.NetworkInformation;
using System.Security.Cryptography;
using System.Text;
using System.Threading.Tasks;

namespace MVCConApp
{
    class Addition
    {
        public float adddata(int a, int b)
        {
            return (a + b);
        }
        public float adddata(int a, float b)
        {
            return (a + b);
        }
        public float adddata(float a, float b)
        {
            return (a + b);
        }
        public float adddata(float a, int b)
        {
            return (a + b);
        }
    }
    internal class Ex_4_MethodOverloading
    {
        static void Main()
        {
            Addition a1 = new Addition();
            Console.WriteLine(a1.adddata(10, 12));
            Console.WriteLine(a1.adddata(10, 12.50f));
            Console.WriteLine(a1.adddata(10.50f, 12.50f));
            Console.WriteLine(a1.adddata(10.50f, 12));

        }
    }
}
