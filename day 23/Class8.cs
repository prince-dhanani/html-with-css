﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MVCConApp
{
    interface Property
    {

        //Id, type, location
        public void insert(int pid, string ptype, string plocation);
        public void delete(int pid);
        public void update(int pid);
        public void retrieve(int pid);
        public void retrieve(string ptype);
    }
    class CProperty : Property
    {
        public int pid;
        public string ptype;
        public string plocation;

        public void insert(int pid, string ptype, string plocation)
        {
            this.pid = pid;
            this.ptype = ptype;
            this.plocation = plocation;
        }
        public string getInsData()
        {
            return "My Pro is " + ptype + " located at " + plocation;
        }
        public void delete(int pid) { }
        public void update(int pid) { }
        public void retrieve(int pid) { }

        public void retrieve(string ptype) { }

    }

    internal class Ex_8_InterfaceSample
    {

        public static void Main()
        {

            CProperty p1 = new CProperty();
            p1.insert(12, "wdfsdf", "sdfsd");
            Console.WriteLine(p1.getInsData());

        }
    }
}
//If-Else statement 
