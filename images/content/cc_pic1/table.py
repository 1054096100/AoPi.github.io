import matplotlib.pyplot as plt
import numpy as np
    
def lineChart(iters, groupNum, name, divideWay):
    # divideWay 1:random; 2:range; 3:hash
    barDate = [iters[i:i+groupNum] for i in range(0, len(iters), groupNum)]
    iterTime = np.arange(1, 16)
    barDate2 = []
    for i in range(groupNum):
        barDate2.append([])
    for i in range(len(barDate)):
        for j in range(groupNum):
            barDate2[j].append(barDate[i][j])
    i = 1
    plt.figure(figsize=(15, 9))
    for data in barDate2:
        plt.plot(iterTime, data, label='group'+str(i))
        plt.ylim(ymin=0, ymax=30)
        plt.xticks(iterTime)
        i = i+1
    
    if(divideWay == 1):
        plt.title("Random Divided -- total group " + str(i-1))
    elif(divideWay == 2):
        plt.title("Range Divided -- total group " + str(i-1))
    elif(divideWay == 3):
        plt.title("Hash Divided -- total group " + str(i-1))

    plt.xlabel("loss time (round)")
    plt.ylabel("iteration times (round)")
    plt.legend()
    # fig.show()
    plt.savefig(name, dpi=600)


def barChart(iters, groupNum, name, divideWay):
    # divideWay 1:random; 2:range; 3:hash
    barDate = [iters[i:i+groupNum] for i in range(0, len(iters), groupNum)]
    iterTime = np.arange(1, 16)
    barDate2 = []
    for i in range(groupNum):
        barDate2.append([])
    for i in range(len(barDate)):
        for j in range(groupNum):
            barDate2[j].append(barDate[i][j])
    i = 1
    width = 1/(groupNum+2)
    plt.figure(figsize=(15, 9))
    for data in barDate2:
        plt.bar(iterTime+(i-1)*width, data, width, label='group'+str(i))
        plt.ylim(ymin=0, ymax=30)
        plt.xticks(iterTime)
        i = i+1

    if(divideWay == 1):
        plt.title("Random Divided -- total group " + str(i-1))
    elif(divideWay == 2):
        plt.title("Range Divided -- total group " + str(i-1))
    elif(divideWay == 3):
        plt.title("Hash Divided -- total group " + str(i-1))

    plt.xlabel("loss time (round)")
    plt.ylabel("iteration times (round)")
    plt.legend()
    # plt.show()
    plt.savefig(name, dpi=600)



def Draw(groupNum):
    # f = open("hash_" + str(groupNum) + ".txt")
    f = open("random_" + str(groupNum) + ".txt")
    # f = open("range_" + str(groupNum) + ".txt")
    data = f.readlines()
    iters = []
    for line in data:
        line = line.split()
        iters.append(int(line[-1]))
    f.close()
    # lineChart(iters, groupNum, "line_hash_" + str(groupNum) + ".png", 3)
    # barChart(iters, groupNum, "bar_hash_" + str(groupNum) + ".png", 3)
    lineChart(iters, groupNum, "line_random_" + str(groupNum) + ".png", 1)
    barChart(iters, groupNum, "bar_random_" + str(groupNum) + ".png", 1)
    # lineChart(iters, groupNum, "line_range_" + str(groupNum) + ".png", 2)
    # barChart(iters, groupNum, "bar_range_" + str(groupNum) + ".png", 2)


# main 
for groupNum in range(2, 13):
    Draw(groupNum)


